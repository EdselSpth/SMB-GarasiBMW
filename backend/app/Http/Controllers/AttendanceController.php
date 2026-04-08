<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employeeId = Auth::user()->employees_id;

        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'gps' => 'required|string',
        ]);

        $alreadyClockedIn = Attendance::where('employees_id', $employeeId)
            ->whereDate('created_at', Carbon::today())
            ->exists();

        if ($alreadyClockedIn) {
            return redirect()->back()->with('error', 'Anda sudah absen hari ini!');
        }

        $photoPath = $request->file('photo')->store('attendance', 'public');

        $clockInTime = Carbon::now();
        $status = $clockInTime->format('H:i') > '08:00' ? 'Terlambat' : 'Hadir';

        Attendance::create([
            'employee_id' => $employeeId,
            'date' => Carbon::today(),
            'status' => $status,
            'clock_in' => $clockInTime->format('H:i:s'),
            'photo' => $photoPath,
            'gps' => $request->gps,
        ]);

        return redirect()->back()->with('success', 'Absensi berhasil! Semangat kerjanya!');
    }
}
