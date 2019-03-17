<div class="newsletter">
@if(session('newsletter'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>{{ session('newsletter') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
@endif
    <form action="{{ URL('/newsletter') }}" method="POST">
        @csrf
        <h5>Notre newsletter, pour ne rien louper de notre actualité !</h5>
        <div class="row justify-content-center container" >
            <input type="text" id="" name="email" placeholder="ton@mail.com" class="tonmail">
            <input type="submit" value="Abonne-toi !" class="btn btn-large btn-newsletter">
        </div>
    </form>
<div class="footer">
    <ul>
        <li><a class="menuFooter" href="#">Accueil</a></li>
        <li><a class="menuFooter" href="#">Contact</a></li>
        <li><a class="menuFooter" href="#">Mentions légales</a></li>
        <li><a class="menuFooter" href="#">copyright tous droits réservés</a></li>
        <li><a class="menuFooterBefore" href="#">Design by Chloé & JS Studio</a></li>
    </ul>
</div>