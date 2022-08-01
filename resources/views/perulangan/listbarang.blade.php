<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Barang</title>
</head>

<body>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <h1>Daftar Barang</h1>
    <ol>

        <?php
        
        foreach (session('barang') as $value) {
            echo '<li>' . $value . '</li>';
        }
        
        ?>

    </ol>

    <ol type="A">

        @foreach (session('barang') as $value)
            {!! '<li>' . $value . '</li>' !!}
        @endforeach



    </ol>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
        </tr>
        @foreach (session('barang') as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item }}</td>
            </tr>
        @endforeach

    </table>

    <hr>

    <form action="{{ route('fpost') }}" method="POST">
        @csrf
        {{-- pake name di route --}}
        {{-- <form action="{{ url('/form-post/tambah/input') }}" method="POST"> --}}
        {{-- pake url --}}
        <label for="fname">First name:</label>

        <input type="text" id="fname" name="fname"><br><br>

        <label for="lname">Last name:</label>

        <input type="text" id="lname" name="lname"><br><br>

        <input type="submit" value="Submit">
        {{-- pake submit di input --}}

        {{-- <button type="submit">Submit</button> --}}

        {{-- pake submit di button --}}
    </form>

</body>

</html>
