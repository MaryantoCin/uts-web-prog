<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>@yield('title')</title>
</head>

<body>
    <nav class="d-flex flex-column">
        <div class="py-5 w-100 text-center fs-1 bg-primary text-white">
            HAPPY BOOK STORE
        </div>
        <div class="d-flex justify-content-center py-2 text-primary">
            <a href="{{ url('/') }}" class="px-3 text-decoration-none">Home</a>
            <a href="#" class="px-3 text-decoration-none dropdown-toggle" id="categoryDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">Category</a>
            <ul class="dropdown-menu" aria-labelledby="categoryDropdown">

                @foreach ($categories as $category)
                    <li><a href="{{ url('category/' . $category->category) }}"
                            class="dropdown-item">{{ $category->category }}</a></li>
                @endforeach
            </ul>

            <a href="{{ url('contact') }}" class="px-3 text-decoration-none">Contact</a>
        </div>
    </nav>
    <div class="container-sm d-flex my-5 justify-content-around">
        <div class="w-50">
            @yield('content')
        </div>
        <div class="w-25">
            <p class="bg-warning p-1 fs-2">Category</p>
            <div class="d-flex flex-column">
                @foreach ($categories as $category)
                    <a href="{{ url('category/' . $category->category) }}"
                        class="text-decoration-none p-2">{{ $category->category }}</a>
                @endforeach
            </div>
        </div>
    </div>
    <footer class="fixed-bottom bg-primary text-center p-1 text-white">
        &copy; Happy Book Store 2021
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
