@extends('layout.page')
@section('main')

<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="{{route('home.index')}}">Home</a>
						<i>|</i>
					</li>
					<li>Tin Tức</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

<div class="container"> 
        <h2 class="w3_agile_header">Tin tức mới</h2> 
        <ul class="faq">
            @foreach ($tintuc as $item)
                
           
            <li class="item1"  ><a href="{{url('/xemtintuc',$item->id)}}" style="color: black" title="click here">{{$item->tieude}}</a>
                
            </li>
            @endforeach
           
        </ul> 
      
      
    </div>



@endsection()