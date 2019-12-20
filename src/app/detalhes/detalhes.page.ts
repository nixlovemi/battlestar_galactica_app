import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from  "@angular/router";
import { UtilsService } from '../utils.service';
import { ModalController } from '@ionic/angular';
import { PgGaleriaImagemPage } from '../pg-galeria-imagem/pg-galeria-imagem.page';

@Component({
  selector: 'app-detalhes',
  templateUrl: './detalhes.page.html',
  styleUrls: ['./detalhes.page.scss'],
})
export class DetalhesPage implements OnInit {
  vTipo;
  vTitulo       = '';
  vArrCards     = [];

  constructor(
    public utilsSrv: UtilsService,
    private actRoute: ActivatedRoute,
    private modalController: ModalController,
  ) { }

  async ngOnInit()
  {
    await this.actRoute.params.subscribe((res) => {
      if(typeof res.tipo != 'undefined'){
        this.vTipo = res.tipo; //vem undefined qdo n tem param | tento deixar 0 default | pode vir texto
      } else {
        this.vTipo = '';
      }
    });

    await this.carregaCards('');
    this.setaTitulo();
  }

  setaTitulo()
  {
    var tipo = this.vTipo.toLowerCase();
    if(tipo == 'admiral'){
      this.vTitulo = 'Almirante';
    } else if(tipo == 'crisis'){
      this.vTitulo = 'Crise';
    } else if(tipo == 'destination'){
      this.vTitulo = 'Destino';
    } else if(tipo == 'loyalty'){
      this.vTitulo = 'Lealdade';
    } else if(tipo == 'character'){
      this.vTitulo = 'Personagem';
    } else if(tipo == 'president'){
      this.vTitulo = 'Presidente';
    } else if(tipo == 'quorum'){
      this.vTitulo = 'Quorum';
    } else if(tipo == 'super_crisis'){
      this.vTitulo = 'Super Crise';
    } else if(tipo == 'location'){
      this.vTitulo = 'Tabuleiro';
    } else if(tipo == 'skill'){
      this.vTitulo = 'Perícia';
    }
  }

  async carregaCards(filtro)
  {
    this.vArrCards = [];
    let globalCards = this.utilsSrv.getArrCards();
    for(let idx in globalCards){
      var item      = globalCards[idx];

      if(item["tipo"] == this.vTipo){
        this.vArrCards.push(item);
      }
    }

    this.vArrCards.sort(function(a, b) {
      var textA = a.nome.toUpperCase();
      var textB = b.nome.toUpperCase();
      return (textA < textB) ? -1 : (textA > textB) ? 1 : 0;
    });

    if(filtro != ''){
      await this.filtraCards(filtro);
    }
  }

  async filtraCards(filtro)
  {
    var novoArray = [];
    for(let idx in this.vArrCards){
      var item = this.vArrCards[idx];

      var filtro_ok = true;
      var nTemNome  = item.nome.toLowerCase().indexOf(filtro.toLowerCase()) < 0;
      var nTemNomeE = item.nome_eng.toLowerCase().indexOf(filtro.toLowerCase()) < 0;

      filtro_ok = !nTemNome || !nTemNomeE;

      if(filtro_ok){
        novoArray.push(item);
      }
    }

    this.vArrCards = novoArray;
  }

  async viewCard(imagem, titulo)
  {
    const modal = await this.modalController.create({
      component: PgGaleriaImagemPage,
      componentProps: {
        'imagem': [{url:imagem}],
        'titulo': titulo,
      }
    });
    return await modal.present();
  }

  async filterList(evt)
  {
    const searchTerm = evt.srcElement.value;

    if (!searchTerm) {
      await this.carregaCards('');
      return;
    }

    await this.carregaCards(searchTerm);
  }
}
