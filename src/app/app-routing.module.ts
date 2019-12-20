import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  { path: '', redirectTo: 'home', pathMatch: 'full' },
  { path: 'home', loadChildren: () => import('./home/home.module').then( m => m.HomePageModule)},
  { path: 'pg-galeria-imagem', loadChildren: './pg-galeria-imagem/pg-galeria-imagem.module#PgGaleriaImagemPageModule' },
  { path: 'detalhes/:tipo', loadChildren: './detalhes/detalhes.module#DetalhesPageModule' }
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
