<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){			
    	return view('page.trangchu');		
    }
    public function getLoaiSP(){			
    	return view('page.loai_sanpham');		
    }
    public function getChitiet(){			
        return view('page.chitiet_sanpham');			
        }			
                    
    public function marter(){			
            return view('master');			
            }	
    public function if(){			
                return view('if');			
                }	
    public function for(){			
            return view('vonglapfor');			
    }				
    public function lienhe(){			
        return view('page.lienhe');			
}    
    public function about(){			
    return view('page.about');			
    }                
}
