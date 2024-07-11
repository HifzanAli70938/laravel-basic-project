<!-- resources/views/components/box.blade.php -->
<div class="box">
    <h2>{{ $title }}</h2>
    <div class="box-content">
        {{ $slot }}
    </div>
    @if($buttonText)
        <div class="box-footer">
            <button>{{ $buttonText }}</button>
        </div>
    @endif
</div>

<style>
   .box {
        height: 50vh
        border: 1px solid #ccc;
        padding: 20px;
        margin: 20px 0;
    }
    .box-content {
        display: flex;
        justify-content: space-between;
    }
    .box-content div {
        flex: 1;
        margin: 0 10px;
    }
    .box-content p {
        margin: 0;
    }
    .box-content img {
        width: 100%;
        height:30vh;
    }
    .box-footer {
        text-align: center;
        margin-top: 20px;
    }
</style>
