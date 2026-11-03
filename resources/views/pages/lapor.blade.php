@extends('layouts.app', ['active' => 'lapor'])

@section('title', 'Find n Search — Lapor Barang Temuan')

@section('content')
    <main style="flex: 999 1 560px; min-width: 0; max-width: 760px">
      <div style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 16px; padding-bottom: 20px; border-bottom: 1px solid #D6E6F5">
        <span><strong>Lapor barang temuan</strong> <span style="color: #4A5E78">· Terima kasih sudah peduli</span></span>
      </div>
      <h1 style="margin: 36px 0 8px; font-size: 38px; font-weight: 800; letter-spacing: -0.03em">Barang apa yang kamu temukan?</h1>
      <p style="margin: 0 0 24px; color: #4A5E78; line-height: 1.6">Cukup foto, nama barang, dan lokasinya. Jangan tulis detail yang bisa dipakai orang lain untuk mengaku-ngaku.</p>

      <form style="background: #FFFFFF; border: 1px solid #D6E6F5; border-radius: 20px; padding: 26px; display: flex; flex-direction: column; gap: 20px">
        <div style="display: flex; flex-direction: column; gap: 8px">
          <span style="font-weight: 700">Foto barang</span>
          <label style="position: relative; border: 2px dashed #90CAF9; border-radius: 16px; padding: 30px 16px; display: flex; flex-direction: column; align-items: center; gap: 8px; background: #E3F2FD; cursor: pointer; text-align: center">
            <span style="width: 52px; height: 52px; border-radius: 50%; background: #2196F3; display: flex; align-items: center; justify-content: center">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 8h3l2-3h6l2 3h3v11H4z"></path><circle cx="12" cy="13" r="3.5"></circle></svg>
            </span>
            <span style="font-weight: 700">Seret foto ke sini atau pilih dari perangkat</span>
            <span style="font-size: 13px; color: #33475B">JPG / PNG, maks. 3 foto, masing-masing 2 MB</span>
            <input type="file" accept="image/*" multiple style="position: absolute; width: 1px; height: 1px; opacity: 0">
          </label>
        </div>
        <label style="display: flex; flex-direction: column; gap: 8px">
          <span style="font-weight: 700">Nama barang</span>
          <input type="text" placeholder="mis. Dompet kulit cokelat" style="border: 1px solid #B7CCE2; border-radius: 10px; padding: 12px 14px; min-height: 22px; color: #0B2545">
        </label>
        <div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px">
          <label style="display: flex; flex-direction: column; gap: 8px">
            <span style="font-weight: 700">Kategori</span>
            <select style="border: 1px solid #B7CCE2; border-radius: 10px; padding: 12px 14px; min-height: 48px; background: #FFFFFF; color: #0B2545">
              <option>Pilih kategori</option><option>Dompet &amp; Kartu</option><option>Elektronik</option><option>Kunci</option><option>Tas</option><option>Lainnya</option>
            </select>
          </label>
          <label style="display: flex; flex-direction: column; gap: 8px">
            <span style="font-weight: 700">Waktu ditemukan</span>
            <input type="datetime-local" style="border: 1px solid #B7CCE2; border-radius: 10px; padding: 12px 14px; min-height: 22px; color: #0B2545">
          </label>
        </div>
        <div style="display: flex; flex-direction: column; gap: 8px">
          <span style="font-weight: 700">Lokasi ditemukan</span>
          <div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px">
            <label style="display: flex; flex-direction: column; gap: 6px">
              <span style="font-size: 13px; color: #4A5E78">Area</span>
              <select style="border: 1px solid #B7CCE2; border-radius: 10px; padding: 12px 14px; min-height: 48px; background: #FFFFFF; color: #0B2545">
                <option>Perpustakaan</option><option>Kantin</option><option>Gedung Kuliah</option><option>Parkiran</option><option>Masjid / Musala</option>
              </select>
            </label>
            <label style="display: flex; flex-direction: column; gap: 6px">
              <span style="font-size: 13px; color: #4A5E78">Detail tempat</span>
              <input type="text" placeholder="mis. lt. 2, meja dekat jendela" style="border: 1px solid #B7CCE2; border-radius: 10px; padding: 12px 14px; min-height: 22px; color: #0B2545">
            </label>
          </div>
          <div style="height: 150px; border-radius: 14px; background: #E3F2FD; border: 1px solid #90CAF9; display: flex; align-items: center; justify-content: center; gap: 8px; color: #0D47A1; font-size: 14px">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 21s-7-6.2-7-11.5A7 7 0 0 1 19 9.5C19 14.8 12 21 12 21z"></path><circle cx="12" cy="9.5" r="2.5"></circle></svg>Peta untuk menandai titik (opsional)
          </div>
        </div>
        <label style="display: flex; flex-direction: column; gap: 8px">
          <span style="font-weight: 700">Keterangan singkat</span>
          <textarea rows="3" placeholder="Ciri umum saja, mis. warna dan bentuk" style="border: 1px solid #B7CCE2; border-radius: 10px; padding: 12px 14px; resize: vertical; color: #0B2545"></textarea>
        </label>
        <label style="display: flex; flex-direction: column; gap: 8px">
          <span style="font-weight: 700">Barang sekarang ada di</span>
          <input type="text" placeholder="mis. dibawa saya / dititipkan ke satpam" style="border: 1px solid #B7CCE2; border-radius: 10px; padding: 12px 14px; min-height: 22px; color: #0B2545">
        </label>
        <div style="display: flex; flex-wrap: wrap; gap: 12px; justify-content: flex-end; padding-top: 6px">
          <a href="{{ route('home') }}" style="color: #0D47A1; text-decoration: none; font-weight: 700; padding: 13px 20px; border-radius: 12px; border: 1px solid #90CAF9">Batal</a>
          <a href="{{ route('laporan') }}" style="background: #0D47A1; color: #FFFFFF; text-decoration: none; font-weight: 700; padding: 14px 24px; border-radius: 12px">Unggah Barang</a>
        </div>
      </form>
    </main>
@endsection
