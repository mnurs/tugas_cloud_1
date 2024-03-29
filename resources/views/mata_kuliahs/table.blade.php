<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="mata-kuliahs-table">
            <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Sks</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($mataKuliahs as $mataKuliah)
                <tr>
                    <td>{{ $mataKuliah->kode }}</td>
                    <td>{{ $mataKuliah->nama }}</td>
                    <td>{{ $mataKuliah->sks }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['mataKuliahs.destroy', $mataKuliah->kode], 'method' => 'delete']) !!}
                        <div class='btn-group'> 
                            <a href="{{ route('mataKuliahs.edit', [$mataKuliah->kode]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $mataKuliahs])
        </div>
    </div>
</div>
