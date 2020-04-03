
        <div class="row">
            {!! Form::hidden('order', 0) !!}
            <div class="col-md-4 text-center text-md-right col-xs-2">
                {!! Form::label('Zdjęcie') !!}
            </div>
            <div class="col-md-6">
                {!! Form::file('file', ['accept' => '.jpeg,.jpg,.png']) !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-center text-md-right">
                {!! Form::label('Nazwa') !!}
            </div>
            <div class="col-md-6">
                {!! Form::text('name', null) !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-center text-md-right">
                {!! Form::label('Krótki opis') !!}
            </div>
            <div class="col-md-6">
                {!! Form::text('alt', null) !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-center text-md-right">
                {!! Form::label('Opis') !!}
            </div>
            <div class="col-md-6">
                {!! Form::textarea('description', null) !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 text-center text-md-right">
                {!! Form::label('Kategorie') !!}
            </div>
            <div class="col-md-6">
                {!! Form::select('categories[]', $categories->pluck('name', 'id'), null, [
                    'multiple' => 'multiple',
                    'style' => 'width: 100%',
                    'size' => 6,
                ]) !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6">
                {!! Form::submit($buttonText) !!}
            </div>
        </div>