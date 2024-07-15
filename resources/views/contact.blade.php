<x-layout>

<!-- Xslot ini untuk memanggil variabel yang dikirim dari route. lalu dilempar pada bagian layout -->
<x-slot:title>{{$title}}</x-slot>
welcome my Contact
<x-slot:nyut>{{$nyut}}</x-slot>
<div>
    <h3> baru</h3>
</div>
<div>
        <table border="3">
            <th>
                <td>Identitas</td>
            </th>
            <tbody>
                <tr>
                    <td> Nama : </td>
                    <td> M. Rifki Fikri Firdaus</td>
                </tr>
                <tr>
                    <td> Email : </td>
                    <td> Rifki@gmail.com</td>
                </tr>
                <tr>
                    <td> Social Media : </td>
                    <td> <a href="">rifkifikri_</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</x-layout>
