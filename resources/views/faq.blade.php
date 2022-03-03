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
               <li><a href="{{ url('/faq') }}" class="active">{{lang::get('main.faq')}}  </a></li>
            </div>
         </div>
         <div class="row">
            <!-- Tabs -->
            <ul class="nav nav-tabs">
               <li class="">
                  <a id="1" href="#">  {{Lang::get('main.shipping')}}   </a>
               </li>
               <li><a id="2" href="#"> {{Lang::get('main.shoppolicy')}} </a></li>
               <li><a id="3" href="#"> {{Lang::get('main.customer')}}  </a></li>
            </ul>
            <!-- Accordions -->
            <div class="tabContent" id="tabContent1">
               <div class="faq-header"> {{Lang::get('main.freq')}} </div>
               <div class="faq-content">
                  <div class="faq-question">
                     <input id="q1" type="checkbox" class="panel">
                     <div class="plus">+</div>
                     <label for="q1" class="panel-title">What is the meaning of life?</label>
                     <div class="panel-content">42</div>
                  </div>
                  <div class="faq-question">
                     <input id="q2" type="checkbox" class="panel">
                     <div class="plus">+</div>
                     <label for="q2" class="panel-title">How much wood would a woodchuck chuck?</label>
                     <div class="panel-content">A woodchuck would chuck all the wood he could chuck, if a woodchuck could chuck wood!</div>
                  </div>
                  <div class="faq-question">
                     <input id="q3" type="checkbox" class="panel">
                     <div class="plus">+</div>
                     <label for="q3" class="panel-title">What happens if Pinocchio says, "my nose will grow now"?</label>
                     <div class="panel-content">Certain questions are better left &nbsp; <a href="https://en.wikipedia.org/wiki/The_Unanswered_Question" target="_blank">unanswered</a></div>
                  </div>
               </div>
            </div>
            <div class="tabContent" id="tabContent2">
               <div class="faq-header">Frequently Asked Questions</div>
               <div class="faq-content">
                  <div class="faq-question">
                     <input id="q1" type="checkbox" class="panel">
                     <div class="plus">+</div>
                     <label for="q1" class="panel-title">What is the meaning of life?</label>
                     <div class="panel-content">42</div>
                  </div>
                  <div class="faq-question">
                     <input id="q2" type="checkbox" class="panel">
                     <div class="plus">+</div>
                     <label for="q2" class="panel-title">How much wood would a woodchuck chuck?</label>
                     <div class="panel-content">A woodchuck would chuck all the wood he could chuck, if a woodchuck could chuck wood!</div>
                  </div>
                  <div class="faq-question">
                     <input id="q3" type="checkbox" class="panel">
                     <div class="plus">+</div>
                     <label for="q3" class="panel-title">What happens if Pinocchio says, "my nose will grow now"?</label>
                     <div class="panel-content">Certain questions are better left &nbsp; <a href="https://en.wikipedia.org/wiki/The_Unanswered_Question" target="_blank">unanswered</a></div>
                  </div>
               </div>
            </div>
            <div class="tabContent" id="tabContent3">
               <div class="faq-header">Frequently Asked Questions</div>
               <div class="faq-content">
                  <div class="faq-question">
                     <input id="q1" type="checkbox" class="panel">
                     <div class="plus">+</div>
                     <label for="q1" class="panel-title">What is tsdfgnh?</label>
                     <div class="panel-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error nobis doloremque beatae libero ipsum iusto rerum delectus maiores sunt totam! Quia, veniam ipsam. Exercitationem iure, laborum facilis impedit vitae sapiente.</div>
                  </div>
                  <div class="faq-question">
                     <input id="q2" type="checkbox" class="panel">
                     <div class="plus">+</div>
                     <label for="q2" class="panel-title">How much wood would a woodchuck chuck?</label>
                     <div class="panel-content">A woodchuck would chuck all the wood he could chuck, if a woodchuck could chuck wood!</div>
                  </div>
                  <div class="faq-question">
                     <input id="q3" type="checkbox" class="panel">
                     <div class="plus">+</div>
                     <label for="q3" class="panel-title">What happens if Pinocchio says, "my nose will grow now"?</label>
                     <div class="panel-content">Certain questions are better left &nbsp; <a href="https://en.wikipedia.org/wiki/The_Unanswered_Question" target="_blank">unanswered</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@stop