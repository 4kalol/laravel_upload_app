<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload App</title>
    @vite('resources/assets/js/app.js')
</head>
<body>
    {{-- サーバから渡ってきたCSRFトークンをhiddenで埋め込む --}}
    <input type='hidden' id='csrf_token' name='csrf_token' value="{{ $csrfToken }}">
    <div id="app"></div>


    <script src="{{ asset('assets/js/app.js') }}">
        // デフォルトでaxiosのヘッダーにトークンを埋め込むように設定
        const token = document.getElementById('csrf_token').getAttribute('value');
        axios.defaults.headers.common['X-CSRF-TOKEN'] = token;
    </script>
</body>
</html>
