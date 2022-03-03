@extends('layouts.default')
@section('content')


<section class="wish-sec">
    <div class="wish-list">
        <div class="container">
            <div class="row">
                <div class="wish-title">
                    <!-- <h3><a href="#">Home </a><span> > </span> <a href="#">Favorites </a>Favorites</h3> -->
                <li><a href="{{ url('/') }}">{{lang::get('main.home')}}  </a></li>
                <li><a href="#"> <i class="fas fa-angle-right"></i> </a></li>
                <li><a href="{{ url('/term') }}" class="active">{{lang::get('main.termsandcondition')}}   </a></li>
                </div>
            </div>
            <div class="row">
                <div class="content-privacy">
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum, expedita amet et iste minima impedit labore voluptas fugit animi ut, similique distinctio doloremque nostrum praesentium dolores assumenda doloribus atque esse?
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium quia quae debitis, provident quisquam nisi fugiat. Porro fuga numquam a perspiciatis recusandae ipsum repudiandae assumenda. Facere quia assumenda nobis accusantium?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab ullam doloribus ex, totam nostrum modi vel fuga sequi natus repudiandae quis. Sequi optio voluptas esse magni maxime iusto amet a.
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae temporibus reprehenderit optio, vero sequi accusamus sapiente nihil, quia voluptate quae quam consequuntur sint tenetur. Laborum sunt quaerat ratione. Assumenda,
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio amet harum soluta? Modi, quis perspiciatis! Obcaecati, laudantium magnam vel inventore magni libero beatae, at facilis aliquid voluptatum, ipsa non iusto.
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis dolore, reiciendis totam distinctio modi ex, debitis necessitatibus impedit doloremque sunt placeat. Voluptates enim pariatur nam error neque, ipsa suscipit natus.
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias qui laborum itaque saepe impedit odit facere adipisci commodi repellendus voluptate minima sapiente doloremque recusandae, id nisi optio, deleniti sequi odio.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ratione distinctio sint, necessitatibus itaque explicabo voluptate qui. Reprehenderit, assumenda veritatis facilis voluptatum, accusamus eveniet rem nihil, beatae corrupti quidem ab?
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto quos ullam odit cumque modi iste accusantium ea quis similique sit quod necessitatibus repudiandae quibusdam, aliquam facere. Laudantium debitis repellendus quam.
</p>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum, expedita amet et iste minima impedit labore voluptas fugit animi ut, similique distinctio doloremque nostrum praesentium dolores assumenda doloribus atque esse?
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium quia quae debitis, provident quisquam nisi fugiat. Porro fuga numquam a perspiciatis recusandae ipsum repudiandae assumenda. Facere quia assumenda nobis accusantium?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab ullam doloribus ex, totam nostrum modi vel fuga sequi natus repudiandae quis. Sequi optio voluptas esse magni maxime iusto amet a.
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae temporibus reprehenderit optio, vero sequi accusamus sapiente nihil, quia voluptate quae quam consequuntur sint tenetur. Laborum sunt quaerat ratione. Assumenda,
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio amet harum soluta? Modi, quis perspiciatis! Obcaecati, laudantium magnam vel inventore magni libero beatae, at facilis aliquid voluptatum, ipsa non iusto.
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis dolore, reiciendis totam distinctio modi ex, debitis necessitatibus impedit doloremque sunt placeat. Voluptates enim pariatur nam error neque, ipsa suscipit natus.
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias qui laborum itaque saepe impedit odit facere adipisci commodi repellendus voluptate minima sapiente doloremque recusandae, id nisi optio, deleniti sequi odio.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ratione distinctio sint, necessitatibus itaque explicabo voluptate qui. Reprehenderit, assumenda veritatis facilis voluptatum, accusamus eveniet rem nihil, beatae corrupti quidem ab?
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto quos ullam odit cumque modi iste accusantium ea quis similique sit quod necessitatibus repudiandae quibusdam, aliquam facere. Laudantium debitis repellendus quam.
</p>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum, expedita amet et iste minima impedit labore voluptas fugit animi ut, similique distinctio doloremque nostrum praesentium dolores assumenda doloribus atque esse?
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium quia quae debitis, provident quisquam nisi fugiat. Porro fuga numquam a perspiciatis recusandae ipsum repudiandae assumenda. Facere quia assumenda nobis accusantium?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab ullam doloribus ex, totam nostrum modi vel fuga sequi natus repudiandae quis. Sequi optio voluptas esse magni maxime iusto amet a.
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae temporibus reprehenderit optio, vero sequi accusamus sapiente nihil, quia voluptate quae quam consequuntur sint tenetur. Laborum sunt quaerat ratione. Assumenda,
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio amet harum soluta? Modi, quis perspiciatis! Obcaecati, laudantium magnam vel inventore magni libero beatae, at facilis aliquid voluptatum, ipsa non iusto.
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis dolore, reiciendis totam distinctio modi ex, debitis necessitatibus impedit doloremque sunt placeat. Voluptates enim pariatur nam error neque, ipsa suscipit natus.
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias qui laborum itaque saepe impedit odit facere adipisci commodi repellendus voluptate minima sapiente doloremque recusandae, id nisi optio, deleniti sequi odio.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ratione distinctio sint, necessitatibus itaque explicabo voluptate qui. Reprehenderit, assumenda veritatis facilis voluptatum, accusamus eveniet rem nihil, beatae corrupti quidem ab?
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto quos ullam odit cumque modi iste accusantium ea quis similique sit quod necessitatibus repudiandae quibusdam, aliquam facere. Laudantium debitis repellendus quam.
</p>
</div>
            </div>
            </div>
        </div>
    </div>
</section>
@stop