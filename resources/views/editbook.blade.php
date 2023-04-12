<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>harde B</title>
    <link rel="stylesheet" href="{{url('styles.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    />
    <script
        src="https://kit.fontawesome.com/f698b33fa3.js"
        crossorigin="anonymous"
    ></script>

</head>
<body>

<main>
    <section class="header">
        <h2>EDIT A BOOK</h2>
        <i class="fa-solid fa-bars fa-lg" id="menu-icon"></i>

    </section>

    <section class="form-container">
        <form action="{{url('editallbook', $data->id )}}" method="POST" enctype="multipart/form-data">
            @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf
            @method('PUT')
            <div class="grid">

                <div class="label">
                    <label for="number_of_pages">Book Name</label>
                    <input
                        type="text"
                        name="name"
                        placeholder="Book Name"
                        value ="{{$data->name}}"
                        maxlength="50"
                    />
                    <label for="number_of_pages">Isbn</label>
                    <input
                        type="text"
                        name="isbn"
                        placeholder="Isbn"
                        required
                        value ="{{$data->isbn}}"
                        maxlength="50"
                    />
                </div>
                <div class="label">
                    <label for="number_of_pages">Author</label>
                    <input
                        type="text"
                        name="authors"
                        placeholder="Author"
                        value ="{{$data->authors}}"
                        required
                    />
                    <div class="label">
                        <label for="number_of_pages">Number of pages</label>
                        <input
                            type="text"
                            name="number_of_pages"
                            placeholder="number of pages"
                            value ="{{$data->number_of_pages}}"
                            required
                        />
                    </div>
                </div>

                <div class="label">
                    <label for="number_of_pages">Publisher</label>
                    <input
                        type="tel"
                        name="publisher"
                        placeholder="publisher "
                        value ="{{$data->publisher}}"
                        required
                    />
                    <label for="number_of_pages">Country</label>
                    <input
                    type="text"
                        name="country"
                        required
                        placeholder="country"
                        value ="{{$data->country}}"
                        maxlength="50"
                    />
                </div>
                <div class="label">
                    <label for="number_of_pages">Release_date</label>
                    <input
                        type="text"
                        name="release_date"
                        value ="{{$data->release_date}}"
                        placeholder="release_date"
                    />

                </div>

            </div>
            <div class="submit-btn"><button type="submit">Submit</button></div>
        </form>
    </section>
</main>
</body>
</html>
