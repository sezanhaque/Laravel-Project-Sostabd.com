<div class="left_menu"> 
		<ul>
			<li><input type="button" value="Dashboard"/></li>
			<li><input type="button" value="Orders"/>
				<ul>
					<li><a href="{{route('user.PendingOrder')}}">Pending Orders</a></li>
					<li><a href="{{route('user.DeliveredOrder')}}">Delivered Orders</a></li>
				</ul>
			</li>
			<li><a href="{{route('cart.show')}}" style="text-decoration:none;"><input type="button" value="Cart"/></a></li>
			<li><a href="{{route('logout')}}" style="text-decoration:none;"><input type="button" value="Logout"/></a></li>
		</ul>
</div>

@yield('content')