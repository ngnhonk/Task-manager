<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task manager</title>

    <!-- Link components -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/layouts/reset.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/layouts/base.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/layouts/app.css') }}" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">

</head>

<body>
    <header>
        <div class="section1">
            <div class="left">
                <a href="#"><img src="/images/logo.png" alt=""></a>
            </div>
            <div class="mid">
                <div class="search-box">
                    <input type="text" placeholder="Search Task..." class="search-input">
                </div>

            </div>
            <div class="right">
                <div class="create-post"><a href="{{ route('tasks.create') }}"><i class="fa-solid fa-plus"></i>Task</a></div>
                <div class="noti"><a href="#"><i class="fa-regular fa-bell"></i></a></div>
                <a class="user" href="#"><img src="" alt=""></a>
            </div>
        </div>
    </header>

    <div class="sidebar">
        <div class="menu">
            <ul>
                <li><a href="{{ route('tasks.index') }}"><i class="fa-solid fa-house"></i>Home</a></li>
                <li><a href="#"><i class="fa-regular fa-star"></i>Schedule</a></li>
                <li><a href="#"><i class="fa-regular fa-calendar-days"></i>Calendar</a></li>
            </ul>
        </div>
        <div class="communities">
            <div class="container-md">
                <h6>Categories</h6>
            </div>
        </div>
    </div>

    <div class="section-one">
        @yield('content');
    </div>

</body>

</html>