<div class="header">
    <div class="nav-item text-nowrap mr-auto">
        <form action="/logout" method="POST">
            @csrf
            <button class="btn btn-danger nav-link px-3" type="submit">Logout</button>
        </form>
    </div>
</div>
