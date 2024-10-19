<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    <title>Blogard Community</title>
</head>

<body class="min-h-screen d-flex flex-col font-sans p-2">
    <div class="max-w-screen-md m-auto mb-[80px]">
        <div class="text-left font-semibold mb-[25px] capitalize">
            <a href="/" class="text-slate-400 hover:text-slate-600 no-underline">Kembali</a>
        </div>
        <form action="/writeblog/store" method="POST" class="space-y-4">
            <div class="w-full">
                <input type="text" name="title" placeholder="Title"
                    class=" border-t-0 border-x-0 text-5xl font-semibold px-2 py-3 placeholder:text-slate-400 rounded-md leading-tight focus:outline-none border-b border-gray-400 w-full">
            </div>
            <div class="w-full">
                <select id="category_id" name="category_id"
                    class="border text-2xl font-semibold text-gray-400 capitalize border-gray-300 rounded-lg block w-full p-2.5">
                    @foreach ($categories as $Category)
                    <option value={{$Category->id}}>{{ $Category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="w-full">
                <img class="max-w-full w-full h-[350px] hidden" id="file-preview">
                <input id="file-input" name="image" type="file" class="cursor-pointer block w-full text-sm text-slate-500
                      file:mr-4 file:py-2 file:px-4
                      file:rounded-full file:border-0
                      file:text-sm file:font-semibold
                      file:bg-violet-50 file:text-gray-700
                      hover:file:bg-violet-100
                    " />
            </div>

            <div class="w-full">
                <div class="w-full pt-4">
                    <trix-toolbar id="my_toolbar"></trix-toolbar>
                    <input id="content" type="hidden" name="content">
                    <div class="more-stuff-inbetween"></div>
                    <trix-editor toolbar="my_toolbar" input="content"></trix-editor>
                </div>
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-700 text-white rounded-xl hover:bg-blue-500 w-max cursor-pointer border-none text-lg duration-100">Submit</button>
        </form>
    </div>
</body>
<script>
    const input = document.getElementById('file-input');
        const previewPhoto = () => {

        const file = input.files;
        if (file) {
            const fileReader = new FileReader();
            const preview = document.getElementById('file-preview');
            preview.classList.remove('hidden');
        fileReader.onload = function (event) {
                preview.setAttribute('src', event.target.result);
            }
            fileReader.readAsDataURL(file[0]);
        }
    }
    input.addEventListener("change", previewPhoto);
</script>

</html>