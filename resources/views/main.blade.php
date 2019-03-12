<div class="row">
    <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('calculate') }}" method="post">
                    @csrf
                    @include('partials.form')
                </form>
            </div>
        </div>
    </div>
</div>
