<?php

//Fecha para html date 
\Carbon\Carbon::today()->toDateString()

0=>'Publico',1=>'Privado'

{{date("h:i", strtotime( $evento->hora ))}}

Un hombre va al médico. Le cuenta que está deprimido. Le dice que la vida le parece dura y cruel. Dice que se siente muy solo en este mundo lleno de amenazas donde lo que nos espera es vago e incierto. El doctor le responde; “El tratamiento es sencillo, el gran payaso Pagliacci se encuentra esta noche en la ciudad, vaya a verlo, eso lo animará”. El hombre se echa a llorar y dice “Pero, doctor… yo soy Pagliacci”.

return redirect()->back()->with('warning','Primero debe crear grupos');

if($request->file('image')){
    Storage::put('public/images/tasks/'.$task->id.'.'.$request->file('image')->getClientOriginalExtension(), file_get_contents($request->file('image')->getRealPath()));
    $task->update(['image' => 'images/tasks/'.$task->id.'.'.$request->file('image')->getClientOriginalExtension()]);
}

Indeed the symlink command should be "ln -sr storage/app/public public/storage"