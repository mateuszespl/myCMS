<div class="card p-2 bg-secondary">
    <form class="bg-light p-5">
        <div class="form-group">
            <label for="title">Meta tytuł</label>
            <input type="text" class="form-control" id="title" name="title">
            <small class="form-text text-muted">Ogranicz ilość znaków do 100 (łącznie z nazwą firmy).</small>
        </div>
        <div class="form-group">
            <label for="description">Meta opis</label>
            <input type="text" class="form-control" id="description" name="description">
            <small class="form-text text-muted">Ogranicz ilość znaków do 160.</small>
        </div>
        <div class="form-group">
            <label for="robots">Meta robots</label>
            <select name="robots" class="form-control" id="robots">
                <option>index, follow</option>
                <option>noindex, follow</option>
                <option>index, nofollow</option>
                <option>noindex, nofollow</option>
            </select>
            <small class="form-text text-muted">Ustawienia dla robotów wyszukiwarki Google.</small>
        </div>
        <div class="form-group">
            <label for="header">Nagłówek artykułu</label>
            <input type="text" class="form-control" id="header" name="header">
        </div>
        <div class="my-5">
            <label for="article">Artykuł</label>
            <textarea id="article" name="article"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Zaakceptuj zmiany</button>
    </form>
</div>