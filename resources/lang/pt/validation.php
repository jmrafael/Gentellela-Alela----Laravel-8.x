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

    'accepted' => 'O :attribute deve ser aceite.',
    'active_url' => 'A :attribute não é uma URL válida.',
    'after' => 'A :attribute deve ser uma data após a :date.',
    'after_or_equal' => 'A :attribute deve ser uma data após ou igual a :date.',
    'alpha' => 'O :attribute deve somente conter letras.',
    'alpha_dash' => 'O :attribute deve somente conter letras, números, travessões e sublinhados..',
    'alpha_num' => 'O :attribute deve somente conter letras, números.',
    'array' => 'O :attribute deve ser um array.',
    'before' => 'A :attribute deve ser uma data anterior a :date.',
    'before_or_equal' => 'A :attribute deve ser uma data anterior ou igual a :date.',
    'between' => [
        'numeric' => 'O :attribute deve estar no intervalo de :min e :max.',
        'file' => 'O :attribute deve estar no intervalo de :min e :max kilobytes.',
        'string' => 'O :attribute deve conter entre :min e :max caracteres.',
        'array' => 'O :attribute deve conter entre :min e :max itens.',
    ],
    'boolean' => 'O :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'A :attribute confirmação não é válida.',
    'date' => 'A :attribute data não é uma válida.',
    'date_equals' => 'A :attribute deve ser uma data igual a :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'O(s) :attribute deve(m) ser :digits dígitos.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'O :attribute deve ser uma e-mail válido.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'O atributo :attribute selecionado é inválido.',
    'file' => 'O :attribute deve ser um ficheiro.',
    'filled' => 'O :attribute é de preenchimento obrigatório.',
    'gt' => [
        'numeric' => 'O :attribute deve ser maior que :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'O :attribute deve conter mais de :value caracteres.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'O :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'A(o) :attribute não deve ser maior que :max.',
        'file' => 'A(o) :attribute não deve ser maior que :max kilobytes.',
        'string' => 'A(o) :attribute não deve conter mais de :max caracteres.',
        'array' => 'A(o) :attribute não deve conter mais de  :max itens.',
    ],
    'mimes' => 'O :attribute deve ser um ficheiro do tipo: :values.',
    'mimetypes' => 'O :attribute deve ser um ficheiro do tipo: :values.',
    'min' => [
        'numeric' => 'A(o) :attribute deve pelo menos ser de :min.',
        'file' => 'A(o) :attribute deve pelo menos ser de :min kilobytes.',
        'string' => 'A(o) :attribute deve conter pelo menos :min caracteres.',
        'array' => 'A(o) :attribute deve conter pelo menos :min itens.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'O(a) :attribute é obrigatório.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

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
