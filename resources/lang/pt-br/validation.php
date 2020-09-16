<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'O campo :attribute deve ser aceito.',
    'active_url' => 'O campo :attribute não é uma URL válida.',
    'after' => 'O campo :attribute deve ser uma data posterior a :date.',
    'after_or_equal' => 'O campo :attribute deve ser uma data posterior ou igal a :date.',
    'alpha' => 'O campo :attribute deve conter apenas letras.',
    'alpha_dash' => 'O campo :attribute deve conter apenas letras, umeros, traços e underlines.',
    'alpha_num' => 'O campo :attribute deve conter apenas letras e numeros.',
    'array' => 'O campo :attribute deve ser um vetor.',
    'before' => 'O campo :attribute deve ser uma data anterior a :date.',
    'before_or_equal' => 'O campo :attribute deve ser uma data anterior ou igual a :date.',
    'between' => [
        'numeric' => 'O campo :attribute deve estar entre :min e :max.',
        'file' => 'O campo :attribute deve estar entre :min e :max kilobytes.',
        'string' => 'O campo :attribute deve estar entre :min e :max characters.',
        'array' => 'O campo :attribute deve estar entre :min e :max items.',
    ],
    'boolean' => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'O campo :attribute confirmação não combina.',
    'date' => 'O campo :attribute não é uma data válida.',
    'date_equals' => 'O campo :attribute deve ser uma data igual a :date.',
    'date_format' => 'O campo :attribute não combina com o formato :format.',
    'different' => 'O campo :attribute e :other devem ser diferentes.',
    'digits' => 'O campo :attribute deve ser :digits dígitos.',
    'digits_between' => 'O campo :attribute deve estar entre :min e :max dígitos.',
    'dimensions' => 'O campo :attribute tem dimensões de imagem inválidas.',
    'distinct' => 'O campo :attribute de valores duplicados.',
    'email' => 'O :attribute deve ser um endereço de email válido.',
    'ends_with' => 'O campo :attribute deve terminar com um dos seguintes: :values.',
    'exists' => 'O campo selecionado :attribute é inválido.',
    'file' => 'O campo :attribute deve ser um arquivo.',
    'filled' => 'O campo :attribute deve conter um valor.',
    'gt' => [
        'numeric' => 'O campo :attribute deve ser maior que :value.',
        'file' => 'O campo :attribute deve ser maior que :value kilobytes.',
        'string' => 'O campo :attribute deve ser maior que :value characters.',
        'array' => 'O campo :attribute deve conter mais que :value items.',
    ],
    'gte' => [
        'numeric' => 'O campo :attribute deve ser maior ou igual que :value.',
        'file' => 'O campo :attribute deve ser maior ou igual que :value kilobytes.',
        'string' => 'O campo :attribute deve ser maior ou igual que :value characters.',
        'array' => 'O campo :attribute deve ter :value items ou mais.',
    ],
    'image' => 'O campo :attribute deve ser uma imagem.',
    'in' => 'O campo selecionado :attribute é invalido.',
    'in_array' => 'O campo :attribute não existe em :other.',
    'integer' => 'O campo :attribute deve ser um inteiro.',
    'ip' => 'O campo :attribute deve ser um endereço de IP válido.',
    'ipv4' => 'O campo :attribute deve ser um endereço de IPv4 válido.',
    'ipv6' => 'O campo :attribute deve ser um endereço de IPv6 válido.',
    'json' => 'O campo :attribute deve ser uma string JSON válida',
    'lt' => [
        'numeric' => 'O campo :attribute deve ser menor que :value.',
        'file' => 'O campo :attribute deve ser menor que :value kilobytes.',
        'string' => 'O campo :attribute deve ser menor que :value characters.',
        'array' => 'O campo :attribute deve ter menos que :value items.',
    ],
    'lte' => [
        'numeric' => 'O campo :attribute deve ser menor ou igual a :value.',
        'file' => 'O campo :attribute deve ser menor ou igual a :value kilobytes.',
        'string' => 'O campo :attribute deve ser menor ou igual a :value characters.',
        'array' => 'O campo :attribute não deve ter mais que :value items.',
    ],
    'max' => [
        'numeric' => 'O campo :attribute não deve ser maior que :max.',
        'file' => 'O campo :attribute não deve ser maior que :max kilobytes.',
        'string' => 'O campo :attribute não deve ser maior que :max characters.',
        'array' => 'O campo :attribute não deve ter mais que :max items.',
    ],
    'mimes' => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes' => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'min' => [
        'numeric' => 'O campo :attribute deve ser no mínimo :min.',
        'file' => 'O campo :attribute deve ser no mínimo :min kilobytes.',
        'string' => 'O campo :attribute deve ser no mínimo :min characters.',
        'array' => 'O campo :attribute must have no minímo :min items.',
    ],
    'not_in' => 'O campo selecionado :attribute é invalido.',
    'not_regex' => 'O formato do campo :attribute é invalido.',
    'numeric' => 'O campo :attribute deve ser um numero.',
    'password' => 'A senha está incorreta.',
    'present' => 'O campo :attribute deve ser presente.',
    'regex' => 'O formato do campo :attribute é invalido.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_if' => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_unless' => 'O campo :attribute é obrigatório amenos :other está em :values.',
    'required_with' => 'O campo :attribute é obrigatório quando :values é presente.',
    'required_with_all' => 'O campo :attribute é obrigatório quando :values são presentes.',
    'required_without' => 'O campo :attribute é obrigatório quando :values não é presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values são presentes.',
    'same' => 'O campo :attribute e :other devem combinar.',
    'size' => [
        'numeric' => 'O campo :attribute deve ser :size.',
        'file' => 'O campo :attribute deve ser :size kilobytes.',
        'string' => 'O campo :attribute deve ser :size characters.',
        'array' => 'O campo :attribute deve conter :size items.',
    ],
    'starts_with' => 'O campo :attribute deve começar com um dos seguintes: :values.',
    'string' => 'O campo :attribute deve ser uma string.',
    'timezone' => 'O campo :attribute deve ser uma zona válida.',
    'unique' => 'O campo :attribute já existe.',
    'uploaded' => 'O campo :attribute falhou em dar upload.',
    'url' => 'O campo :attribute formato é invalido.',
    'uuid' => 'O campo :attribute deve ser uma UUID válida.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
