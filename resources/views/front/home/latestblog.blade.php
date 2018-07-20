@foreach($blogs as $blog)

<div class="col-md-6 top-text">
						 <a href="single.html"><img src="uploads/{{$blog->figure}}" class="img-responsive" alt=""></a>
						    <h5 class="top"><a href="single.html">{{$blog->heading}}</a></h5>
							<p>{{$blog->fullstory}}.</p>
						    <p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
					 </div>
					

@endforeach