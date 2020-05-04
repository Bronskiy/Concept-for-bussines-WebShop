<?php

namespace App\Http\Controllers;

use App\User;
use App\TblArtikel;
use App\TblAdress;
use App\TblPartlist;
use App\TblProjekt;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Exports\AdressenExport;
use App\Imports\AdressenImport;
use App\Exports\ArtikelExport;
use App\Imports\ArtikelImport;
use App\Exports\PartlistExport;
use App\Imports\PartlistImport;
use App\Exports\ProjektExport;
use App\Imports\ProjektImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportExportController extends Controller
{
  /**
  * @return \Illuminate\Support\Collection
  */
  // public function importExportView()
  // {
  //    return view('import');
  // }

  /**
  * @return \Illuminate\Support\Collection
  */
  public function exportUsers()
  {
      return Excel::download(new UsersExport, 'personen.xlsx');
  }

  public function exportAdressen()
  {
      return Excel::download(new AdressenExport, 'adressen.xlsx');
  }

  public function exportArtikel()
  {
      return Excel::download(new ArtikelExport, 'artikel.xlsx');
  }

  public function exportPartlist()
  {
      return Excel::download(new PartlistExport, 'partlist.xlsx');
  }

  public function exportProjekt()
  {
      return Excel::download(new ProjektExport, 'projekt.xlsx');
  }

  /**
  * @return \Illuminate\Support\Collection
  */
  public function importUsers()
  {
      User::where('role_id', '=', 3)->delete();
      Excel::import(new UsersImport,request()->file('file'));

      return back();
  }

  public function importAdressen()
  {
      TblAdress::query()->truncate();
      Excel::import(new AdressenImport,request()->file('file'));

      return back();
  }

  public function importArtikel()
  {
      TblArtikel::query()->truncate();
      Excel::import(new ArtikelImport,request()->file('file'));

      return back();
  }

  public function importPartlist()
  {
      TblPartlist::query()->truncate();
      Excel::import(new PartlistImport,request()->file('file'));

      return back();
  }

  public function importProjekt()
  {
      TblProjekt::query()->truncate();
      Excel::import(new ProjektImport,request()->file('file'));

      return back();
  }
}
