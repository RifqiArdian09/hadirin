<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cetak Kehadiran Harian</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    @media print {
      body { padding: 0; margin: 0; }
      .no-print { display: none !important; }
      header { display: none; }
      .hover\:bg-gray-50 { background-color: transparent !important; }
    }
    /* Styling tombol aksi mobile dan desktop tetap sama */
    @media (max-width: 640px) {
      .action-buttons { display: flex; flex-direction: row; gap: 0.5rem; justify-content: flex-end; }
      .action-btn { width: 34px; height: 34px; display: flex; align-items: center; justify-content: center; border-radius: 50%; }
      .action-text { display: none; }
    }
    @media (min-width: 641px) {
      .action-btn { padding: 0.25rem 0.5rem; border-radius: 0.25rem; }
      .action-text { display: inline; margin-left: 0.25rem; }
    }
    .floating-btn {
      transition: all 0.3s ease;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }
    .floating-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }
  </style>
</head>
<body class="bg-gray-100 min-h-screen">

  <!-- Header -->
  <header class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 py-3 sm:py-4 sm:px-6 lg:px-8 flex justify-between items-center">
      <div class="flex items-center space-x-3 sm:space-x-4">
        <a href="{{ url('/') }}" class="text-gray-600 hover:text-gray-900 transition-colors" title="Kembali ke Beranda">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
          </svg>
        </a>
        <h1 class="text-lg sm:text-xl font-bold text-gray-800">
          Rekap Kehadiran Harian
        </h1>
      </div>
    </div>
  </header>

  <div class="max-w-7xl mx-auto p-4 sm:p-6">
    <!-- Report Card -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
      <!-- Report Header -->
      <div class="px-6 py-4 border-b bg-gray-50">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
          <div class="text-center md:text-left">
            <h2 class="text-xl font-semibold text-gray-800">REKAP KEHADIRAN HARIAN</h2>
            <p class="text-gray-600">SMKN 1 Kota Bengkulu</p>
            <p class="text-md font-medium text-blue-600">{{ $date }}</p>
          </div>
          
          <div class="flex items-center gap-2 no-print">
            <button onclick="window.print()" class="action-btn bg-blue-600 text-white hover:bg-blue-700">
              <i class="fas fa-print"></i>
              <span class="action-text">Cetak</span>
            </button>
          </div>
        </div>
      </div>
      
      <!-- Report Content -->
      <div class="p-4 sm:p-6">
        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">No</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keterangan</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Waktu </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @forelse($attendances as $index => $attendance)
              <tr class="hover:bg-gray-50">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">{{ $index + 1 }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm font-medium text-gray-900">{{ $attendance->user->name }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 capitalize">
                  {{ $attendance->status }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{ $attendance->keterangan ?? '-' }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{ $attendance->scan_time->format('H:i:s') }}
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="5" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                  Tidak ada data kehadiran hari ini
                </td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
        
        <!-- Summary -->
        @if($attendances->count() > 0)
        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
          <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div class="text-sm text-gray-600">
              Total Kehadiran: <span class="font-semibold">{{ $attendances->count() }} orang</span>
            </div>
            <div class="text-sm text-gray-500">
              Dicetak pada: {{ now()->format('d-m-Y H:i:s') }}
            </div>
          </div>
        </div>
        @endif
      </div>
    </div>
  </div>

  <script>
    function beforePrint() {
      document.querySelectorAll('.hover\\:bg-gray-50').forEach(el => {
        el.classList.remove('hover:bg-gray-50');
      });
    }
    function afterPrint() {
      document.querySelectorAll('.hover\\:bg-gray-50').forEach(el => {
        el.classList.add('hover:bg-gray-50');
      });
    }
    window.addEventListener('beforeprint', beforePrint);
    window.addEventListener('afterprint', afterPrint);
  </script>
</body>
</html>
