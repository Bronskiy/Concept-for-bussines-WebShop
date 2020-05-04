<?php

namespace App\Imports;

use App\User;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithValidation;

HeadingRowFormatter::default('none');

class UsersImport implements ToModel, WithCustomCsvSettings, WithHeadingRow
{
  use Importable;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
          'id'     => $row['ID'],
          'idAdresse'    => $row['fiIDAdresse'],
          'email'    => $row['E-Mail'],
          'name'    => 'noname',
          'password' => \Hash::make('has_to_be_random_value'),
          'role_id'    => 3,
        ]);
    }

    public function rules(): array
    {
          return [
              // 'email' => Rule::unique('users', 'email'),
              '3' => 'unique:users,email',

          ];
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }
}
