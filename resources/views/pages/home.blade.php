@extends('layouts.app', ['active' => 'home', 'cta' => 'Menemukan barang? Laporkan di sini'])

@section('title', 'Find n Search — Beranda')

@php
    $cats = ['Semua', 'Dompet & Kartu', 'Elektronik', 'Kunci', 'Tas', 'Lainnya'];
    $catOn = 'border: 1px solid #0D47A1; background: #0D47A1; color: #FFFFFF; border-radius: 999px; padding: 0 16px; min-height: 44px; font-weight: 700; cursor: pointer';
    $catOff = 'border: 1px solid #90CAF9; background: #FFFFFF; color: #0B2545; border-radius: 999px; padding: 0 16px; min-height: 44px; cursor: pointer';
    $tagA = 'position: absolute; top: 10px; left: 10px; background: #FFFFFF; color: #0D47A1; font-size: 12px; font-weight: 700; padding: 4px 10px; border-radius: 999px';
    $tagB = 'position: absolute; top: 10px; left: 10px; background: #0D47A1; color: #FFFFFF; font-size: 12px; font-weight: 700; padding: 4px 10px; border-radius: 999px';
    $items = [
        ['name' => 'Dompet kulit cokelat', 'cat' => 'Dompet & Kartu', 'loc' => 'Perpustakaan, lt. 2', 'date' => 'hari ini', 'status' => 'Tersedia'],
        ['name' => 'Kunci motor + gantungan', 'cat' => 'Kunci', 'loc' => 'Parkiran Timur', 'date' => 'kemarin', 'status' => 'Tersedia'],
        ['name' => 'Earphone nirkabel putih', 'cat' => 'Elektronik', 'loc' => 'Kantin', 'date' => '2 hari lalu', 'status' => 'Ada klaim'],
        ['name' => 'Kartu tanda mahasiswa', 'cat' => 'Dompet & Kartu', 'loc' => 'Gedung Kuliah A', 'date' => '2 hari lalu', 'status' => 'Tersedia'],
        ['name' => 'Tas laptop hitam', 'cat' => 'Tas', 'loc' => 'Musala', 'date' => '3 hari lalu', 'status' => 'Tersedia'],
        ['name' => 'Botol minum biru', 'cat' => 'Lainnya', 'loc' => 'Gedung Kuliah B', 'date' => '4 hari lalu', 'status' => 'Tersedia'],
        ['name' => 'Charger laptop', 'cat' => 'Elektronik', 'loc' => 'Perpustakaan, lt. 1', 'date' => '5 hari lalu', 'status' => 'Ada klaim'],
        ['name' => 'Payung lipat abu-abu', 'cat' => 'Lainnya', 'loc' => 'Kantin', 'date' => '6 hari lalu', 'status' => 'Tersedia'],
    ];
@endphp

@section('content')
    <main style="flex: 999 1 560px; min-width: 0">
      <div style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 16px; padding-bottom: 20px; border-bottom: 1px solid #D6E6F5">
        <span><strong>Hai, Fikri</strong> <span style="color: #4A5E78">· Ayo saling bantu temukan barang</span></span>
        <a href="{{ route('lapor') }}" style="background: #0D47A1; color: #FFFFFF; text-decoration: none; font-weight: 700; padding: 13px 22px; border-radius: 12px">Lapor Barang Temuan</a>
      </div>

      <h1 style="margin: 40px 0 20px; font-size: 40px; font-weight: 800; line-height: 1.15; letter-spacing: -0.03em">Cari barangmu yang hilang</h1>

      <form style="background: #FFFFFF; border: 1px solid #90CAF9; border-radius: 16px; padding: 10px; display: flex; flex-wrap: wrap; gap: 8px">
        <label style="flex: 3 1 220px; display: flex; flex-direction: column; gap: 2px; padding: 6px 12px">
          <span style="font-size: 12px; font-weight: 700; color: #4A5E78">Nama barang</span>
          <input type="search" placeholder="mis. dompet, kunci motor, KTM" style="border: none; outline: none; font-size: 16px; padding: 4px 0; background: transparent; color: #0B2545">
        </label>
        <label style="flex: 2 1 170px; display: flex; flex-direction: column; gap: 2px; padding: 6px 12px; border-left: 1px solid #D6E6F5">
          <span style="font-size: 12px; font-weight: 700; color: #4A5E78">Lokasi ditemukan</span>
          <select style="border: none; outline: none; font-size: 16px; padding: 4px 0; background: transparent; color: #0B2545">
            <option>Semua lokasi</option><option>Perpustakaan</option><option>Kantin</option><option>Gedung Kuliah</option><option>Parkiran</option><option>Masjid / Musala</option>
          </select>
        </label>
        <label style="flex: 1 1 150px; display: flex; flex-direction: column; gap: 2px; padding: 6px 12px; border-left: 1px solid #D6E6F5">
          <span style="font-size: 12px; font-weight: 700; color: #4A5E78">Tanggal</span>
          <select style="border: none; outline: none; font-size: 16px; padding: 4px 0; background: transparent; color: #0B2545">
            <option>7 hari terakhir</option><option>Hari ini</option><option>30 hari terakhir</option>
          </select>
        </label>
        <button type="button" style="flex: 0 0 auto; background: #0D47A1; color: #FFFFFF; border: none; border-radius: 12px; padding: 0 24px; min-height: 54px; font-weight: 700; display: flex; align-items: center; gap: 8px; cursor: pointer">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" aria-hidden="true"><circle cx="11" cy="11" r="6.5"></circle><path d="M16 16l4.5 4.5"></path></svg>Cari
        </button>
      </form>

      <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 8px; margin: 28px 0 20px">
        @foreach ($cats as $c)
          <button type="button" data-cat="{{ $c }}" style="{{ $c === 'Semua' ? $catOn : $catOff }}">{{ $c }}</button>
        @endforeach
        <span style="margin-left: auto; color: #4A5E78"><span id="item-count">{{ count($items) }}</span> barang ditemukan</span>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 18px">
        @foreach ($items as $it)
          <a href="{{ route('barang.detail') }}" data-item-cat="{{ $it['cat'] }}" style="background: #FFFFFF; border: 1px solid #D6E6F5; border-radius: 16px; overflow: hidden; text-decoration: none; color: #0B2545; display: flex; flex-direction: column">
            <div style="height: 150px; background: #E3F2FD; display: flex; align-items: center; justify-content: center; position: relative">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#2196F3" stroke-width="1.6" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"></rect><circle cx="9" cy="10" r="1.6"></circle><path d="M21 16l-5-5-8 8"></path></svg>
              <span style="{{ $it['status'] === 'Ada klaim' ? $tagB : $tagA }}">{{ $it['status'] }}</span>
            </div>
            <div style="padding: 14px 16px 16px; display: flex; flex-direction: column; gap: 6px">
              <span style="font-size: 12px; font-weight: 700; color: #0D47A1">{{ $it['cat'] }}</span>
              <span style="font-weight: 700; font-size: 17px">{{ $it['name'] }}</span>
              <span style="display: flex; align-items: center; gap: 6px; color: #4A5E78; font-size: 14px">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 21s-7-6.2-7-11.5A7 7 0 0 1 19 9.5C19 14.8 12 21 12 21z"></path><circle cx="12" cy="9.5" r="2.5"></circle></svg>{{ $it['loc'] }}
              </span>
              <span style="color: #4A5E78; font-size: 13px">Ditemukan {{ $it['date'] }}</span>
            </div>
          </a>
        @endforeach
      </div>
    </main>
@endsection

@push('scripts')
<script>
(function () {
  var on = @json($catOn);
  var off = @json($catOff);
  var buttons = document.querySelectorAll('[data-cat]');
  var cards = document.querySelectorAll('[data-item-cat]');
  var count = document.getElementById('item-count');
  buttons.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var cat = btn.getAttribute('data-cat');
      buttons.forEach(function (b) { b.setAttribute('style', b === btn ? on : off); });
      var n = 0;
      cards.forEach(function (card) {
        var show = cat === 'Semua' || card.getAttribute('data-item-cat') === cat;
        card.style.display = show ? 'flex' : 'none';
        if (show) n++;
      });
      count.textContent = n;
    });
  });
})();
</script>
@endpush
