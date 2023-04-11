@extends('layouts.app')

@section('content')

<!-- виджеты начало -->
<!-- виджеты конец -->
<!-- второе меню старт -->
<div class="container ">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Меню администратора</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="navbarDarkDropdownMenuLink" role="button">
                            Заказы
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#" id="navbarDarkDropdownMenuLink" role="button">
                            Пользователи
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="navbarDarkDropdownMenuLink" role="button">
                            Организации
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="navbarDarkDropdownMenuLink" role="button">
                            Товары
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="navbarDarkDropdownMenuLink" role="button">
                            Транспорт
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- второе меню конец -->
<!-- поиск старт -->
<div class="container">
    <div class="input-group py-4">
        <input type="text" class="form-control" placeholder="Поиск запчастей ..." aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Поиск</button>
    </div>
</div>
<!-- поиск конец -->
<!-- товары старт -->
<div class="container text-center">
    <h3>Товар не найден</h3>
    <!-- <div class="table-responsive-md">
        <table class="table table-hover">
            <tbody>
                <tr>
                <th scope="row"><img src="#" alt="product"></th>
                <td>артикул: 11122</td>
                <td>бренд: конский волос</td>
                <td>нлменклатура: 484848 dsddsdsffdssfdsffsfsfdsfdb fibfdsibfsiub sb sfss </td>
                <td>количество: 11122</td>
                <td>цена: 11122 руб.</td>
                <td><button type="button" class="btn btn-dark">Купить</button></td>
                </tr>
            </tbody>
        </table>
    </div> -->
</div>
<!-- товары конец -->
<!-- пагинация старт -->
<!-- <div class="container">
    <nav aria-label="...">
        <ul class="pagination">
            <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Назад</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
            <a class="page-link" href="#">Вперед</a>
            </li>
        </ul>
    </nav>
</div> -->
<!-- пагинация конец -->

@endsection
