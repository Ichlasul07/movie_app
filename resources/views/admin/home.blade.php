<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GetMovie</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{asset('')}}CSS/admin.css" rel="stylesheet" />
    </head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.png" alt="">
            </div>
            <span class="logo_name">GetMovie</span>
        </div>
        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Transaksi</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Edit</span>
                </a></li>
                
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>
                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>
                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="text">Total User non Premium</span>
                        <span class="number">50,120</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-comments"></i>
                        <span class="text">Total User Premium</span>
                        <span class="number">20,120</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-share"></i>
                        <span class="text">Jumlah User</span>
                        <span class="number">10,120</span>
                    </div>
                </div>
            </div>
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>
                <div class="activity-data">
                    <table class="relative min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700 border-collapse border border-black border-opacity-100 rounded-mb justify-center align-center">
                        <thead class="w-full bg-gray-100 dark:bg-gray-700 text-center items-center justify-center relative">
                            <tr>
                                <th scope="col" class="py-3 px-6 text-[14px] font-medium tracking-wider text-center text-gray-700 uppercase dark:text-gray-400">
                                    ID
                                </th>
                                <th scope="col" class="py-3 px-6 text-[14px] font-medium tracking-wider text-center text-gray-700 uppercase dark:text-gray-400">
                                    Nama Menu
                                </th>
                                <th scope="col" class="py-3 px-6 text-[14px] font-medium tracking-wider text-center text-gray-700 uppercase dark:text-gray-400">
                                    Jenis
                                </th>
                                <th scope="col" class="py-3 px-6 text-[14px] font-medium tracking-wider text-center text-gray-700 uppercase dark:text-gray-400">
                                    Deskripsi
                                </th>
                                <th scope="col" class="py-3 px-6 text-[14px] font-medium tracking-wider text-center text-gray-700 uppercase dark:text-gray-400">
                                    Info
                                </th>
                                <th scope="col" class="py-3 px-6 text-[14px] font-medium tracking-wider text-center text-gray-700 uppercase dark:text-gray-400">
                                    Harga
                                </th>
                                <th scope="col" class="py-3 px-6 text-[14px] font-medium tracking-wider text-center text-gray-700 uppercase dark:text-gray-400">
                                    Foto
                                </th>
                                <th scope="col" class="p-4">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                            @forelse ($data as $item)
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="py-4 px-6 text-sm text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$item['name']}}</td>
                                <td class="py-4 px-6 text-sm text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$item['email']}}</td>
                                <td class="py-4 px-6 text-sm text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$item['password']}}</td>
                                <td class="py-4 px-6 text-sm text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$item['role']}}</td>
                                <td class="py-4 px-6 text-sm text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$item['info']}}</td>
                                <td class="py-4 px-6 text-sm text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$item['harga']}}</td>
                                <td class="py-4 px-6 text-sm text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$item['foto']}}</td>
                                <td class="py-4 px-6 text-sm text-center font-medium text-right whitespace-nowrap">
                                    <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            @empty
                                
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>