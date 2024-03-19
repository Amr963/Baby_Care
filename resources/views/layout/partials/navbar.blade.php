<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <img style="height: 50px; width: 200px" src="{{ asset('assests/imges/babycare1.png') }}" alt="logo" />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        إرشادات وبرامج
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        التغذية
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        النمو والتطور
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('ChildWeightStats.index') }}">النمو</a></li>
                        <li><a class="dropdown-item" href="{{ route('child_progress.index') }}">التطور</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" role="tab" data-bs-toggle="dropdown"
                        aria-expanded="false" aria-current="page">
                        اللقاحات
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('fromChooseAge') }}">اللقاح المناسب</a></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('diseases') }}">لمحة عن الأمراض</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('vaccines.index') }}">تعليمات خاصة</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('frequently_asked_questions.index') }}">أسئلة
                                شائعة</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">الرئيسية</a>
                </li>
            </ul>
            {{-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="النص هنا" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">بحث</button>
            </form> --}}
        </div>
    </div>
</nav>