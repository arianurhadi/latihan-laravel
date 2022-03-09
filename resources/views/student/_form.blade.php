<div class="form-group mt-3">
    <label for="nis" class="form-label fw-bold">NIS</label>
    <input type="number" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" value="{{ old('nis', @$student->nis) }}">
    @error('nis')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group mt-3">
    <label for="name" class="form-label fw-bold">Nama</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', @$student->user->name) }}">
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group mt-3">
    <label for="phone" class="form-label fw-bold">No HP</label>
    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="ex.08xxxxxx" value="{{ old('phone', @$student->phone) }}">
    @error('phone')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group mt-3">
    <label for="email" class="form-label fw-bold">Email</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="ex.user@email.com" value="{{ old('email', @$student->user->email) }}">
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group mt-3">
    <label for="password" class="form-label fw-bold">Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
    @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="d-grid mt-3">
    <button type="submit" class="btn btn-primary">Simpan</button>
</div>