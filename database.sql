/*==============================================================*/
/* DBMS name:      ORACLE Version 11g                           */
/* Created on:     11/19/2020 7:57:13 PM                        */
/*==============================================================*/


alter table DETAIL
   drop constraint FK_DETAIL_DETAIL_BARANG;

alter table DETAIL
   drop constraint FK_DETAIL_DETAIL2_PESAN;

alter table PESAN
   drop constraint FK_PESAN_MELAYANI_SALES;

alter table PESAN
   drop constraint FK_PESAN_MEMESAN_PELANGGA;

alter table PESAN
   drop constraint FK_PESAN_PUNYA2_TRANSAKS;

alter table TRANSAKSI
   drop constraint FK_TRANSAKS_MELAKUKAN_KASIR;

alter table TRANSAKSI
   drop constraint FK_TRANSAKS_PUNYA_PESAN;

drop table BARANG cascade constraints;

drop index DETAIL2_FK;

drop index DETAIL_FK;

drop table DETAIL cascade constraints;

drop table KASIR cascade constraints;

drop table PELANGGAN cascade constraints;

drop index MELAYANI_FK;

drop index MEMESAN_FK;

drop index PUNYA2_FK;

drop table PESAN cascade constraints;

drop table SALES cascade constraints;

drop index MELAKUKAN_FK;

drop index PUNYA_FK;

drop table TRANSAKSI cascade constraints;

/*==============================================================*/
/* Table: BARANG                                                */
/*==============================================================*/
create table BARANG 
(
   KODE_BARANG          INTEGER              not null,
   NAMA_BARANG          VARCHAR2(16),
   HARGA                NUMBER(16),
   constraint PK_BARANG primary key (KODE_BARANG)
);

/*==============================================================*/
/* Table: DETAIL                                                */
/*==============================================================*/
create table DETAIL 
(
   KODE_BARANG          INTEGER              not null,
   ID_PESAN             INTEGER              not null,
   QUANTITY             NUMBER(16),
   SUBTOTAL             NUMBER(16),
   constraint PK_DETAIL primary key (KODE_BARANG, ID_PESAN)
);

/*==============================================================*/
/* Index: DETAIL_FK                                             */
/*==============================================================*/
create index DETAIL_FK on DETAIL (
   KODE_BARANG ASC
);

/*==============================================================*/
/* Index: DETAIL2_FK                                            */
/*==============================================================*/
create index DETAIL2_FK on DETAIL (
   ID_PESAN ASC
);

/*==============================================================*/
/* Table: KASIR                                                 */
/*==============================================================*/
create table KASIR 
(
   ID_KASIR             INTEGER              not null,
   NAMA_KASIR           VARCHAR2(16),
   PASSWORD_KASIR       VARCHAR2(16),
   constraint PK_KASIR primary key (ID_KASIR)
);

/*==============================================================*/
/* Table: PELANGGAN                                             */
/*==============================================================*/
create table PELANGGAN 
(
   ID_PELANGGAN         INTEGER              not null,
   NAMA                 VARCHAR2(16),
   TELP                 VARCHAR2(16),
   constraint PK_PELANGGAN primary key (ID_PELANGGAN)
);

/*==============================================================*/
/* Table: PESAN                                                 */
/*==============================================================*/
create table PESAN 
(
   ID_PESAN             INTEGER              not null,
   ID_PELANGGAN         INTEGER,
   ID_SALES             INTEGER,
   ID_TRANSAKSI         INTEGER,
   TANGGAL              DATE,
   TOTAL                NUMBER(16),
   constraint PK_PESAN primary key (ID_PESAN)
);

/*==============================================================*/
/* Index: PUNYA2_FK                                             */
/*==============================================================*/
create index PUNYA2_FK on PESAN (
   ID_TRANSAKSI ASC
);

/*==============================================================*/
/* Index: MEMESAN_FK                                            */
/*==============================================================*/
create index MEMESAN_FK on PESAN (
   ID_PELANGGAN ASC
);

/*==============================================================*/
/* Index: MELAYANI_FK                                           */
/*==============================================================*/
create index MELAYANI_FK on PESAN (
   ID_SALES ASC
);

/*==============================================================*/
/* Table: SALES                                                 */
/*==============================================================*/
create table SALES 
(
   ID_SALES             INTEGER              not null,
   NAMA_SALES           VARCHAR2(16),
   PASSWORD_SALES       VARCHAR2(16),
   constraint PK_SALES primary key (ID_SALES)
);

/*==============================================================*/
/* Table: TRANSAKSI                                             */
/*==============================================================*/
create table TRANSAKSI 
(
   ID_TRANSAKSI         INTEGER              not null,
   ID_KASIR             INTEGER,
   ID_PESAN             INTEGER,
   KEMBALI              NUMBER(16),
   BAYAR                NUMBER(16),
   constraint PK_TRANSAKSI primary key (ID_TRANSAKSI)
);

/*==============================================================*/
/* Index: PUNYA_FK                                              */
/*==============================================================*/
create index PUNYA_FK on TRANSAKSI (
   ID_PESAN ASC
);

/*==============================================================*/
/* Index: MELAKUKAN_FK                                          */
/*==============================================================*/
create index MELAKUKAN_FK on TRANSAKSI (
   ID_KASIR ASC
);

alter table DETAIL
   add constraint FK_DETAIL_DETAIL_BARANG foreign key (KODE_BARANG)
      references BARANG (KODE_BARANG);

alter table DETAIL
   add constraint FK_DETAIL_DETAIL2_PESAN foreign key (ID_PESAN)
      references PESAN (ID_PESAN);

alter table PESAN
   add constraint FK_PESAN_MELAYANI_SALES foreign key (ID_SALES)
      references SALES (ID_SALES);

alter table PESAN
   add constraint FK_PESAN_MEMESAN_PELANGGA foreign key (ID_PELANGGAN)
      references PELANGGAN (ID_PELANGGAN);

alter table PESAN
   add constraint FK_PESAN_PUNYA2_TRANSAKS foreign key (ID_TRANSAKSI)
      references TRANSAKSI (ID_TRANSAKSI);

alter table TRANSAKSI
   add constraint FK_TRANSAKS_MELAKUKAN_KASIR foreign key (ID_KASIR)
      references KASIR (ID_KASIR);

alter table TRANSAKSI
   add constraint FK_TRANSAKS_PUNYA_PESAN foreign key (ID_PESAN)
      references PESAN (ID_PESAN);

