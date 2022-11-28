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

    'accepted' => ':Attribute harus diterima.',
    'accepted_if' => ':Attribute harus diterima ketika :other bernilai :value.',
    'active_url' => ':Attribute bukan URL yang sah.',
    'after' => ':Attribute harus tanggal setelah :date.',
    'after_or_equal' => ':Attribute harus tanggal setelah atau sama dengan :date.',
    'alpha' => ':Attribute hanya boleh berisi huruf.',
    'alpha_dash' => ':Attribute hanya boleh berisi huruf, angka, dan strip.',
    'alpha_num' => ':Attribute hanya boleh berisi huruf dan angka.',
    'array' => ':Attribute harus berupa sebuah array.',
    'before' => ':Attribute harus tanggal sebelum :date.',
    'before_or_equal' => ':Attribute harus tanggal sebelum atau sama dengan :date.',
    'between' => [
        'numeric' => ':Attribute harus antara :min dan :max.',
        'file' => ':Attribute harus antara :min dan :max kilobytes.',
        'string' => ':Attribute harus antara :min dan :max karakter.',
        'array' => ':Attribute harus antara :min dan :max item.',
    ],
    'boolean' => ':Attribute harus berupa true atau false',
    'confirmed' => 'Konfirmasi :attribute tidak cocok.',
    'current_password' => 'Akun tidak ada atau kata sandimu salah.',
    'date' => ':Attribute bukan tanggal yang valid.',
    'date_equals' => ':Attribute harus tanggal yang sama dengan :date.',
    'date_format' => ':Attribute tidak cocok dengan format :format.',
    'declined' => ':Attribute harus ditolak.',
    'declined_if' => ':Attribute harus ditolak ketika :other bernilai :value.',
    'different' => ':Attribute dan :other harus berbeda.',
    'digits' => ':Attribute harus berupa angka :digits.',
    'digits_between' => ':Attribute harus antara angka :min dan :max.',
    'dimensions' => ':Attribute harus merupakan dimensi gambar yang sah.',
    'distinct' => ':Attribute memiliki nilai yang duplikat.',
    'doesnt_end_with' => ':Attribute tidak boleh diakhiri oleh: :values.',
    'doesnt_start_with' => ':Attribute tidak boleh diawali oleh: :values.',
    'email' => ':Attribute harus berupa alamat surel yang valid.',
    'ends_with' => ':Attribute harus diakhiri dengan: :values.',
    'enum' => 'Opsi :attribute terpilih tidak valid.',
    'exists' => ':Attribute yang dipilih tidak valid.',
    'file' => ':Attribute harus berupa file.',
    'filled' => ':Attribute wajib diisi.',
    'gt' => [
        'array' => ':Attribute harus memiliki lebih dari :value item.',
        'file' => ':Attribute harus lebih besar dari :value kilobytes.',
        'string' => ':Attribute harus lebih besar dari :value karakter.',
        'numeric' => ':Attribute harus lebih besar dari :value.',
    ],
    'gte' => [
        'numeric' => ':Attribute harus lebih besar dari atau sama dengan :value.',
        'file' => ':Attribute harus lebih besar dari atau sama dengan :value kilobytes.',
        'string' => ':Attribute harus lebih besar dari atau sama dengan :value karakter.',
        'array' => ':Attribute harus memiliki :value item atau lebih.',
    ],
    'image' => ':Attribute harus berupa gambar.',
    'in' => ':Attribute yang dipilih tidak valid.',
    'in_array' => ':Attribute tidak terdapat dalam :other.',
    'integer' => ':Attribute harus merupakan bilangan bulat.',
    'ip' => ':Attribute harus berupa alamat IP yang valid.',
    'ipv4' => ':Attribute harus berupa alamat IPv4 yang valid.',
    'ipv6' => ':Attribute harus berupa alamat IPv6 yang valid.',
    'json' => ':Attribute harus berupa JSON string yang valid.',
    'lt' => [
        'numeric' => ':Attribute harus kurang dari :value.',
        'file' => ':Attribute harus kurang dari :value kilobytes.',
        'string' => ':Attribute harus kurang dari :value karakter.',
        'array' => ':Attribute harus memiliki kurang dari :value item.',
    ],
    'lte' => [
        'numeric' => ':Attribute harus kurang dari atau sama dengan :value.',
        'file' => ':Attribute harus kurang dari atau sama dengan :value kilobytes.',
        'string' => ':Attribute harus kurang dari atau sama dengan :value karakter.',
        'array' => ':Attribute tidak boleh lebih dari :value item.',
    ],
    'mac_address' => ':Attribute harus berupa alamat MAC yang valid.',
    'max' => [
        'numeric' => ':Attribute seharusnya tidak lebih dari :max.',
        'file' => ':Attribute seharusnya tidak lebih dari :max kilobytes.',
        'string' => ':Attribute seharusnya tidak lebih dari :max karakter.',
        'array' => ':Attribute seharusnya tidak lebih dari :max item.',
    ],
    'max_digits' => ':Attribute tidak boleh lebih dari :max digit.',
    'mimes' => ':Attribute harus dokumen berjenis : :values.',
    'mimetypes' => ':Attribute harus berupa file bertipe: :values.',
    'min' => [
        'numeric' => ':Attribute harus minimal :min.',
        'file' => ':Attribute harus minimal :min kilobytes.',
        'string' => ':Attribute harus minimal :min karakter.',
        'array' => ':Attribute harus minimal :min item.',
    ],
    'min_digits' => ':Attribute harus memiliki setidaknya :min digit.',
    'multiple_of' => ':Attribute harus kelipatan :value.',
    'not_in' => ':Attribute yang dipilih tidak valid.',
    'not_regex' => ':Attribute format tidak valid.',
    'numeric' => ':Attribute harus berupa angka.',
    'password' => [
        'letters' => ':Attribute must contain at least one letter.',
        'mixed' => ':Attribute must contain at least one uppercase and one lowercase letter.',
        'numbers' => ':Attribute must contain at least one number.',
        'symbols' => ':Attribute must contain at least one symbol.',
        'uncompromised' => ':Attribute pernah mengalami kebocoran data. Pilih :attribute yang berbeda.',
    ],
    'present' => ':Attribute wajib ada.',
    'prohibited' => ':Attribute tidak diterima.',
    'prohibited_if' => ':Attribute tidak diterima ketika :other bernilai :value.',
    'prohibited_unless' => ':Attribute tidak diterima kecuali :other memiliki :values.',
    'prohibits' => ':Attribute melarang :other untuk muncul.',
    'regex' => 'Format isian :attribute tidak valid.',
    'required' => ':Attribute wajib diisi.',
    'required_array_keys' => ':Attribute harus berisi entri untuk: :values.',
    'required_if' => ':Attribute wajib diisi bila :other adalah :value.',
    'required_if_accepted' => ':Attribute diperlukan ketika :other diterima.',
    'required_unless' => ':Attribute wajib diisi kecuali :other memiliki nilai :values.',
    'required_with' => ':Attribute wajib diisi bila terdapat :values.',
    'required_with_all' => ':Attribute wajib diisi bila terdapat :values.',
    'required_without' => ':Attribute wajib diisi bila tidak terdapat :values.',
    'required_without_all' => ':Attribute wajib diisi bila tidak terdapat ada :values.',
    'same' => ':Attribute dan :other harus sama.',
    'size' => [
        'numeric' => ':Attribute harus berukuran :size.',
        'file' => ':Attribute harus berukuran :size kilobyte.',
        'string' => ':Attribute harus berukuran :size karakter.',
        'array' => ':Attribute harus mengandung :size item.',
    ],
    'starts_with' => ':Attribute harus dimulai dengan: :values.',
    'string' => ':Attribute harus berupa string.',
    'timezone' => ':Attribute harus berupa zona waktu yang valid.',
    'unique' => ':Attribute sudah ada sebelumnya.',
    'uploaded' => ':Attribute gagal mengunggah.',
    'url' => 'Format isian :attribute tidak valid.',
    'uuid' => ':Attribute harus berupa UUID yang valid.',
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

    'attributes' => [
        'phone_email' => 'Email/Whatsapp'
    ],

];