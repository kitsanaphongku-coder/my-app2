@extends('layout')

@section('title', 'เขียนบทความใหม่')

@section('content')
    <h2 class="text text-center py-2">พัฒนาระบบฟอร์มแจ้งเคลมสินค้าชำรุดพร้อม</h2>

    <form method="POST" action="/insert">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">รหัสสินค้า</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            @error('title')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">อีเมลผู้ติดต่อ</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">อาการชำรุด</label>
            <textarea name="description" id="description" class="form-control" cols="30" rows="5">{{ old('description') }}</textarea>
            @error('description')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="priority" class="form-label">ระดับความเร่งด่วน</label>
            <input type="text" class="form-control" id="priority" name="priority" value="{{ old('priority') }}">
            @error('priority')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <input type="submit" value="บันทึก" class="btn btn-primary my-3">
        <a href="/blogs" class="btn btn-success my-3">กลับหน้าบทความ</a>
    </form>
@endsection
