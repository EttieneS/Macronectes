<?php
    namespace App\Http\Controllers;

    use App\Models\User;
    use Inertia\Inertia;
    use App\Http\Services\PortaService;
    use App\Http\Services\RecordingService;
    use Illuminate\Support\Facades\Http;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;

    class UserController extends Controller
    {        
        public function createview()
        {
            return Inertia::render('Users/Create');
        }

        public function create(Request $user)
        {
            dd($user->name); 

            $user = User::create([
                "name"=> $user->name, 
                "email"=> $user->email
            ]);
        }
    }
?>