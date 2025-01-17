<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
  <link href="https://fonts.googleapis.com/css2?family=Istok+Web:wght@400;700&display=swap" rel="stylesheet">

</head>
<body class="bg-purple-200">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="w-1/4 bg-gradient-to-r from-blue-800 to-purple-700 text-white h-screen p-8">
            <h2 class="text-2xl font-semibold mb-8">Kelompok 7</h2>
            <ul class="space-y-4">
                <li class="hover:bg-purple-600 rounded-lg px-4 py-2 transition duration-300">
                    <a href="{{ route('pengajuan-skripsi') }}">Pengajuan Skripsi</a>

                </li>
                <li class="hover:bg-purple-600 rounded-lg px-4 py-2 transition duration-300">
                    <a href="{{ route('status-skripsi') }}">Status Skripsi</a>
                </li>
                <li class="hover:bg-purple-600 rounded-lg px-4 py-2 transition duration-300">
                    <a href="{{ route('pengajuan-bimbingan') }}">Pengajuan Bimbingan</a>
                </li>
                <li class="bg-white text-black rounded-lg px-4 py-2 shadow">
                    <a href="{{ route('pengajuan-seminar-proposal') }}">Pengajuan Seminar Proposal</a>
                </li>
                
                
                <li class="hover:bg-purple-600 rounded-lg px-4 py-2 transition duration-300">
                    <a href="{{ route('pengajuan-seminar-hasil') }}">Pengajuan Seminar Hasil</a>
                </li>
            </ul>
        </div>
    
        <!-- Main Content -->
        <div class="w-3/4 p-10 flex h-full">
            <!-- Form Pengajuan Skripsi -->
            <div class="bg-purple-400 p-6 mt-8 rounded-lg">
                <h2 class="text-lg font-bold mb-4">Pengajuan Seminar Proposal</h2>
            
                <!-- File Uploads -->
                <div class="mb-4">
                    <label class="block mb-2">Upload Kartu Bimbingan</label>
                    <input type="file" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none">
                </div>
                <div class="mb-4">
                    <label class="block mb-2">Upload Kartu Persetujuan Seminar</label>
                    <input type="file" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none">
                </div>
            
                <button class="w-full bg-purple-600 text-white p-2 rounded-lg hover:bg-purple-700 transition duration-300">SUBMIT</button>
            
                <!-- Status Pengajuan Table -->
                <div class="mt-6">
                    <h2 class="text-lg font-bold mb-4">Status Pengajuan Seminar Proposal</h2>
                    <table class="w-full bg-white rounded-lg">
                        <thead>
                            <tr class="text-left">
                                <th class="p-2">Judul Skripsi</th>
                                <th class="p-2">Latar Belakang</th>
                                <th class="p-2">Dosen Pembimbing</th>
                                <th class="p-2">Status Skripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-2"> </td>
                                <td class="p-2"> </td>
                                <td class="p-2"> </td>
                                <td class="p-2"> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    
            <!-- Sidebar Right (Calendar and Notifications) -->
            <div class="flex flex-col w-1/3 space-y-6 pl-10">
                <!-- Calendar -->
                <div class="bg-blue-600 text-white p-6 rounded-lg">
                    <h4 class="mb-3 text-lg font-semibold">September 2024</h4>
                    <div class="grid grid-cols-7 gap-1 text-center">
                        <span>Sun</span><span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span>
                        <span class="text-gray-400">1</span><span class="text-gray-400">2</span><span class="text-gray-400">3</span><span class="text-gray-400">4</span><span class="text-gray-400">5</span><span class="text-gray-400">6</span><span class="text-gray-400">7</span>
                        <span>8</span><span>9</span><span>10</span><span>11</span><span>12</span><span>13</span><span>14</span>
                        <span>15</span><span>16</span><span>17</span><span>18</span><span class="bg-white text-blue-600 font-bold rounded-full px-2 py-1">19</span><span>20</span><span>21</span>
                        <span>22</span><span>23</span><span>24</span><span>25</span><span>26</span><span>27</span><span>28</span>
                        <span>29</span><span>30</span>
                    </div>
                </div>

                <!-- Notifications -->
                <div class="bg-purple-400 text-white p-6 rounded-lg">
                    <h4 class="text-lg font-semibold mb-3">Notifikasi</h4>
                    <div class="bg-gray-200 text-black p-2 rounded-lg mb-2">
                        <p>Seminar Hasil</p>
                        <p class="text-sm">Mon, 25 Jan 2025</p>
                    </div>
                    <div class="bg-gray-200 text-black p-2 rounded-lg mb-2">
                        <p>Yudisium Periode V</p>
                        <p class="text-sm">Mon, 22 Feb 2025</p>
                    </div>
                    <div class="bg-gray-200 text-black p-2 rounded-lg">
                        <p>Wisuda 130</p>
                        <p class="text-sm">Thu, 06 Mar 2025</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
</body>
</html>