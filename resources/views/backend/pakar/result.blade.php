@if(count($kesimpulan) > 0)
    <div class="alert alert-danger" style="text-align: left">
        Anda memiliki diagnosa penyakit :
        @foreach($kesimpulan as $item)
            {{$item['diagnosa']->nama_diagnosa_penyakit}} ({{$item['nilai']}}) % ,
        @endforeach
    </div>
@else
    <div class="alert alert-success">Anda tidak memiliki diagnosa penyakit apapun!</div>
@endif