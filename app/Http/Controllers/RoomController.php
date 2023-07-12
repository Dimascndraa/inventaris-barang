<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangCategory;
use App\Models\ControlPanel;
use App\Models\Room;
use App\Models\TemplateBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    public function index()
    {
        return view('pages.rooms.index', [
            'rooms' => Room::orderBy('created_at', 'desc')->get(),
            'i' => ControlPanel::all()->first()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'max:255|required',
            'room_code' => 'max:255|required',
            'floor' => 'integer|max:255|required',
        ]);

        Room::create($validatedData);
        return redirect('/rooms')->with('success', 'Ruangan berhasil ditambahkan!');
    }

    public function show(Barang $barang, Room $room)
    {
        return view('pages.rooms.show', [
            'title' => "Ruang $room->name",
            'room' => $room,
            'categories' => BarangCategory::all(),
            'barangs' => $barang->where('room_id', $room->id)->get(),
            'i' => ControlPanel::all()->first(),
            'templates' => TemplateBarang::all(),
        ]);
    }

    public function update(Request $request, Room $room)
    {
        $validatedData = $request->validate([
            'name' => 'max:255|required',
            'room_code' => 'max:255|required',
            'floor' => 'integer|max:255|required',
        ]);

        Room::where('id', $room->id)->update($validatedData);
        return redirect('/rooms')->with('success', 'Ruangan berhasil diubah!');
    }

    public function destroy(Room $room)
    {
        Room::destroy($room->id);
        return redirect('/rooms')->with('success', 'Ruangan berhasil dihapus!');
    }

    public function storeBarang(Request $request)
    {
        $validatedData = $request->validate([
            'custom_name' => "max:255",
            'template_barang_id' => "required|max:255",
            'condition' => "required|max:5120",
            'bidding_year' => "required|max:255",
            'merk' => "max:255",
            'urutan_barang' => "max:255",
            'room_id' => "max:255",
        ]);

        $room_code = Room::where('id', $request['room_id'])->first()->room_code;

        $barang_id = $request->template_barang_id;
        $template = TemplateBarang::where('id', $barang_id)->first();

        // Dapatkan urutan barang terakhir berdasarkan template_barang
        $lastUrutanBarang = Barang::where('template_barang_id', $template->id)
            ->where('urutan_barang', '<>', '0')
            ->orderByDesc('urutan_barang')
            ->first();

        if ($lastUrutanBarang) {
            $urutanBarang = intval($lastUrutanBarang->urutan_barang) + 1;
        } else {
            $urutanBarang = 1;
        }

        // Set urutan_barang dengan format "001"
        $validatedData['urutan_barang'] = str_pad($urutanBarang, 3, '0', STR_PAD_LEFT);

        $item_code = $request['instance_code'] . "/" . $template->category->category_code . "/" . $room_code . "/" . $template->barang_code . "." . $template->name . " " . $validatedData['urutan_barang'] . "/" . $request->bidding_year;
        $validatedData['item_code'] = $item_code;

        // return $validatedData;
        Barang::create($validatedData);
        return redirect("/rooms/$request->room_id")->with('success', 'Barang berhasil ditambahkan!');
    }

    public function updateBarang(Request $request, Barang $barang)
    {
        $validatedData = $request->validate([
            'custom_name' => "max:255",
            'template_barang_id' => "required|max:255",
            'item_code' => "required|max:255",
            'merk' => "max:255",
            'urutan_barang' => "max:255",
            'condition' => "required|max:255",
            'bidding_year' => "required|max:255",
        ]);

        Barang::where('id', $barang->id)->update($validatedData);
        return redirect("/rooms/$request->room_id")->with('success', 'Barang berhasil diubah!');
    }

    public function destroyBarang(Barang $barang, Request $request)
    {
        // return $barang;
        Barang::destroy($barang->id);
        return redirect("/rooms/$request->room_id")->with('success', 'barang berhasil dihapus!');
    }

    public function printLabel(Request $request)
    {
        $barang = Barang::where('room_id', $request->room_id)->get('item_code');
        $room_id = Room::where('id', $request->room_id)->first('id')->id;
        return view('pages.rooms.print-label', [
            'items' => $barang,
            'room_id' => $room_id
        ]);

        // return $barang;

        // Barang::destroy($barang->id);
        // return redirect("/rooms/$request->room_id")->with('success', 'barang berhasil dihapus!');
    }
}
