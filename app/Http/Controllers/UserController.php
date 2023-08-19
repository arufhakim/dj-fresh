<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;
use Flasher\Prime\FlasherInterface;
use Spatie\Activitylog\Models\Activity;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /*
     * Menampilkan List Pengguna Sistem.
     * 
     */
    public function index()
    {
        return view('logged.user.index', [
            "users" => User::all(),
        ]);
    }

    /*
     * Menampilkan Form Add Pengguna Sistem.
     * 
     */
    public function create()
    {
        return view('logged.user.create');
    }

    /*
     * Menyimpan Informasi dalam Database.
     * 
     */
    public function store(Request $request)
    {
        $userVal = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:20|unique:users',
            'password' => 'required|string|min:8|regex:/^.*(?=.{3,})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\d\x]).*$/',
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        flash()->addSuccess('Pengguna Sistem Berhasil Ditambahkan!');

        return redirect()->route('user.index');
    }

    /*
     * Menampilkan Form Edit Password.
     * 
     */
    public function edit(User $user)
    {
        return view('logged.user.edit', compact('user'));
    }

    /*
     * Update Informasi dalam Database.
     * 
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'password_lama' => ['required', 'string', 'min:8', new MatchOldPassword],
            'password_baru' => 'required|string|min:8|regex:/^.*(?=.{3,})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\d\x]).*$/',
            'password_konfirmasi' => ['same:password_baru'],
        ]);

        $user->update([
            'password' => Hash::make($request['password_baru']),
        ]);

        flash()->addSuccess('Password Berhasil Diubah!');

        return redirect()->back();
    }

    /*
     * Reset Password Pengguna Sistem.
     * 
     */
    public function resetPassword(User $user)
    {
        $user->update([
            'password' => Hash::make('Petrokimia1'),
        ]);

        flash()->addSuccess('Password Pengguna Berhasil Direset!');

        return redirect()->back();
    }

    /*
     * Menghapus Pengguna Sistem.
     * 
     */
    public function destroy(User $user)
    {
        $user->delete();

        flash()->addSuccess('Pengguna Sistem Berhasil Dihapus!');

        return redirect()->back();
    }
}
