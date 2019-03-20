@extends('layouts.default')

@section('content')

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <div class="container">
                    <div class="jumbotron">
                        <h1>About thailand</h1>
                        <p>More information about each region is here!</p>
                    </div>
                </div>

                <div class="blog-post">

                    <h2 class="blog-post-title">Northern Region</h2>
                    <p>Northern Thailand, bordering Laos and Myanmar (Burma), is known for its thickly forested
                        mountains inhabited by several hill tribes,
                        each with its own language and culture. In the provincial capital, Chiang Mai, the old city has
                        noteworthy Buddhist temples dating to the Lanna Kingdom,
                        including 14th-century Wat Chedi Luang. The sacred, gilded Doi Suthep Temple overlooks the city
                        from nearby Mt. Suthep.</p>
                    <hr>
                    <img src="images/northern2.jpg" alt="history" width="700" height="500">
                    <hr>
                    <h2 class="blog-post-title">Northeastern Region (Isaan)</h2>
                    <p>Isan consists of 20 provinces in the northeastern region of Thailand. Isan is Thailand's largest
                        region, located on the Khorat Plateau,
                        bordered by the Mekong River to the north and east, by Cambodia to the southeast and the
                        Sankamphaeng Range south of Nakhon Ratchasima. </p>
                    <hr>
                    <img src="images/isaan2.JPG" alt="history" width="700" height="500">
                    <hr>
                    <h2 class="blog-post-title">Central Region</h2>
                    <p>Central Thailand is a region of Thailand, covering the broad alluvial plain of the Chao Phraya
                        River. It is separated from northeast
                        Thailand by the Phetchabun mountain range. The Tenasserim Hills separate it from Myanmar to the
                        west.</p>
                    <hr>
                    <img src="images/central2.jpg" alt="history" width="700" height="500">
                    <hr>
                    <h2 class="blog-post-title">Southern Region</h2>
                    <p>Southern Thailand is a southernmost cultural region of Thailand, separated from Central Thailand
                        region by the Kra Isthmus.</p>
                    <hr>
                    <img src="images/southern.jpg" alt="history" width="700" height="500">
                    <hr>
                </div>
                <hr>
            </div>

            <aside class="col-md-4 blog-sidebar">
                <div class="p-4">
                    <h4 class="font-italic">Find out more about each region!</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="https://wikitravel.org/en/Northern_Thailand">Northern Region</a></li>
                        <li><a href="https://wikitravel.org/en/Isaan">Northeastern Region</a></li>
                        <li><a href="https://wikitravel.org/en/Central_Thailand">Central Region</a></li>
                        <li><a href="https://wikitravel.org/en/Southern_Thailand">Southern Region</a></li>
                    </ol>
                </div>
            </aside>

        </div>

    </main>

@endsection