toc.dat                                                                                             0000600 0004000 0002000 00000114632 15010120224 0014431 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        PGDMP                           }            saga2    15.4    15.4 ~    �
           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false         �
           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false         �
           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false         �
           1262    16877    saga2    DATABASE     x   CREATE DATABASE saga2 WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'French_France.1252';
    DROP DATABASE saga2;
                postgres    false         �            1255    16996    notify_messenger_messages()    FUNCTION     �   CREATE FUNCTION public.notify_messenger_messages() RETURNS trigger
    LANGUAGE plpgsql
    AS $$
            BEGIN
                PERFORM pg_notify('messenger_messages', NEW.queue_name::text);
                RETURN NEW;
            END;
        $$;
 2   DROP FUNCTION public.notify_messenger_messages();
       public          postgres    false         �            1259    16894    affectations    TABLE     d  CREATE TABLE public.affectations (
    id integer NOT NULL,
    document_id integer NOT NULL,
    agent_id integer,
    owner_id integer,
    poste_owner_id integer,
    envoyeur character varying(255) DEFAULT NULL::character varying,
    receveur character varying(255) DEFAULT NULL::character varying,
    date_affectation_at date,
    status boolean
);
     DROP TABLE public.affectations;
       public         heap    postgres    false         �            1259    16884    affectations_id_seq    SEQUENCE     |   CREATE SEQUENCE public.affectations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.affectations_id_seq;
       public          postgres    false         �            1259    16907 
   directions    TABLE     �   CREATE TABLE public.directions (
    id integer NOT NULL,
    directeur_id integer,
    owner_id integer,
    code character varying(10) NOT NULL,
    libelle character varying(255) NOT NULL,
    status boolean NOT NULL
);
    DROP TABLE public.directions;
       public         heap    postgres    false         �            1259    16885    directions_id_seq    SEQUENCE     z   CREATE SEQUENCE public.directions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.directions_id_seq;
       public          postgres    false         �            1259    16915 	   divisions    TABLE     �   CREATE TABLE public.divisions (
    id integer NOT NULL,
    service_id integer,
    chef_id integer,
    owner_id integer,
    code character varying(10) NOT NULL,
    libelle character varying(255) NOT NULL,
    status boolean NOT NULL
);
    DROP TABLE public.divisions;
       public         heap    postgres    false         �            1259    16886    divisions_id_seq    SEQUENCE     y   CREATE SEQUENCE public.divisions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.divisions_id_seq;
       public          postgres    false         �            1259    16878    doctrine_migration_versions    TABLE     �   CREATE TABLE public.doctrine_migration_versions (
    version character varying(191) NOT NULL,
    executed_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    execution_time integer
);
 /   DROP TABLE public.doctrine_migration_versions;
       public         heap    postgres    false         �            1259    16924 	   documents    TABLE     �  CREATE TABLE public.documents (
    id integer NOT NULL,
    owner_id integer,
    type_document_id integer,
    reponse_id integer,
    poste_owner_id integer,
    objet text NOT NULL,
    chemin character varying(255) NOT NULL,
    mouvement character varying(50) NOT NULL,
    document_at timestamp(0) without time zone NOT NULL,
    status boolean NOT NULL,
    structure character varying(255) NOT NULL,
    reference character varying(255) NOT NULL,
    numero_enregistrement integer NOT NULL,
    poste character varying(15) NOT NULL,
    niveau character varying(15) NOT NULL,
    date_arrivee date NOT NULL,
    date_document date,
    initiateur character varying(25) DEFAULT NULL::character varying,
    observation text
);
    DROP TABLE public.documents;
       public         heap    postgres    false         �
           0    0    COLUMN documents.document_at    COMMENT     R   COMMENT ON COLUMN public.documents.document_at IS '(DC2Type:datetime_immutable)';
          public          postgres    false    228         �            1259    16887    documents_id_seq    SEQUENCE     y   CREATE SEQUENCE public.documents_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.documents_id_seq;
       public          postgres    false         �            1259    16984    messenger_messages    TABLE     s  CREATE TABLE public.messenger_messages (
    id bigint NOT NULL,
    body text NOT NULL,
    headers text NOT NULL,
    queue_name character varying(190) NOT NULL,
    created_at timestamp(0) without time zone NOT NULL,
    available_at timestamp(0) without time zone NOT NULL,
    delivered_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone
);
 &   DROP TABLE public.messenger_messages;
       public         heap    postgres    false         �
           0    0 $   COLUMN messenger_messages.created_at    COMMENT     Z   COMMENT ON COLUMN public.messenger_messages.created_at IS '(DC2Type:datetime_immutable)';
          public          postgres    false    236         �
           0    0 &   COLUMN messenger_messages.available_at    COMMENT     \   COMMENT ON COLUMN public.messenger_messages.available_at IS '(DC2Type:datetime_immutable)';
          public          postgres    false    236         �
           0    0 &   COLUMN messenger_messages.delivered_at    COMMENT     \   COMMENT ON COLUMN public.messenger_messages.delivered_at IS '(DC2Type:datetime_immutable)';
          public          postgres    false    236         �            1259    16983    messenger_messages_id_seq    SEQUENCE     �   CREATE SEQUENCE public.messenger_messages_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.messenger_messages_id_seq;
       public          postgres    false    236         �
           0    0    messenger_messages_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.messenger_messages_id_seq OWNED BY public.messenger_messages.id;
          public          postgres    false    235         �            1259    16936    postes    TABLE     v  CREATE TABLE public.postes (
    id integer NOT NULL,
    agent_id integer NOT NULL,
    owner_id integer NOT NULL,
    niveau character varying(25) NOT NULL,
    fonction character varying(15) NOT NULL,
    date_deb date NOT NULL,
    poste_at date NOT NULL,
    date_fin date,
    status boolean NOT NULL,
    type character varying(25) DEFAULT NULL::character varying
);
    DROP TABLE public.postes;
       public         heap    postgres    false         �            1259    16888 
   postes_id_seq    SEQUENCE     v   CREATE SEQUENCE public.postes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.postes_id_seq;
       public          postgres    false         �            1259    16944    provenances    TABLE     �   CREATE TABLE public.provenances (
    id integer NOT NULL,
    document_id integer NOT NULL,
    structure character varying(255) NOT NULL,
    numero integer,
    date_enregistrement date NOT NULL
);
    DROP TABLE public.provenances;
       public         heap    postgres    false         �            1259    16889    provenances_id_seq    SEQUENCE     {   CREATE SEQUENCE public.provenances_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.provenances_id_seq;
       public          postgres    false         �            1259    16950    secretariats    TABLE     �   CREATE TABLE public.secretariats (
    id integer NOT NULL,
    direction_id integer,
    owner_id integer,
    secretaire character varying(10) NOT NULL,
    type character varying(25) NOT NULL,
    status boolean
);
     DROP TABLE public.secretariats;
       public         heap    postgres    false         �            1259    16890    secretariats_id_seq    SEQUENCE     |   CREATE SEQUENCE public.secretariats_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.secretariats_id_seq;
       public          postgres    false         �            1259    16957    services    TABLE     �   CREATE TABLE public.services (
    id integer NOT NULL,
    direction_id integer,
    chef_id integer,
    owner_id integer,
    code character varying(10) NOT NULL,
    libelle character varying(255) NOT NULL,
    status boolean NOT NULL
);
    DROP TABLE public.services;
       public         heap    postgres    false         �            1259    16891    services_id_seq    SEQUENCE     x   CREATE SEQUENCE public.services_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.services_id_seq;
       public          postgres    false         �            1259    16966    type_documents    TABLE     �   CREATE TABLE public.type_documents (
    id integer NOT NULL,
    owner_id integer,
    direction_id integer,
    code character varying(25) NOT NULL,
    libelle character varying(255) NOT NULL,
    status boolean
);
 "   DROP TABLE public.type_documents;
       public         heap    postgres    false         �            1259    16892    type_documents_id_seq    SEQUENCE     ~   CREATE SEQUENCE public.type_documents_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.type_documents_id_seq;
       public          postgres    false         �            1259    16974    users    TABLE     �  CREATE TABLE public.users (
    id integer NOT NULL,
    owner_id integer,
    email character varying(180) NOT NULL,
    nom character varying(80) NOT NULL,
    prenom character varying(100) NOT NULL,
    roles json NOT NULL,
    niveau character varying(15) NOT NULL,
    zone character varying(15) NOT NULL,
    status boolean NOT NULL,
    password character varying(255) NOT NULL
);
    DROP TABLE public.users;
       public         heap    postgres    false         �            1259    16893    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false         �           2604    16987    messenger_messages id    DEFAULT     ~   ALTER TABLE ONLY public.messenger_messages ALTER COLUMN id SET DEFAULT nextval('public.messenger_messages_id_seq'::regclass);
 D   ALTER TABLE public.messenger_messages ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    236    235    236         �
          0    16894    affectations 
   TABLE DATA           �   COPY public.affectations (id, document_id, agent_id, owner_id, poste_owner_id, envoyeur, receveur, date_affectation_at, status) FROM stdin;
    public          postgres    false    225       3469.dat �
          0    16907 
   directions 
   TABLE DATA           W   COPY public.directions (id, directeur_id, owner_id, code, libelle, status) FROM stdin;
    public          postgres    false    226       3470.dat �
          0    16915 	   divisions 
   TABLE DATA           ]   COPY public.divisions (id, service_id, chef_id, owner_id, code, libelle, status) FROM stdin;
    public          postgres    false    227       3471.dat �
          0    16878    doctrine_migration_versions 
   TABLE DATA           [   COPY public.doctrine_migration_versions (version, executed_at, execution_time) FROM stdin;
    public          postgres    false    214       3458.dat �
          0    16924 	   documents 
   TABLE DATA              COPY public.documents (id, owner_id, type_document_id, reponse_id, poste_owner_id, objet, chemin, mouvement, document_at, status, structure, reference, numero_enregistrement, poste, niveau, date_arrivee, date_document, initiateur, observation) FROM stdin;
    public          postgres    false    228       3472.dat �
          0    16984    messenger_messages 
   TABLE DATA           s   COPY public.messenger_messages (id, body, headers, queue_name, created_at, available_at, delivered_at) FROM stdin;
    public          postgres    false    236       3480.dat �
          0    16936    postes 
   TABLE DATA           v   COPY public.postes (id, agent_id, owner_id, niveau, fonction, date_deb, poste_at, date_fin, status, type) FROM stdin;
    public          postgres    false    229       3473.dat �
          0    16944    provenances 
   TABLE DATA           ^   COPY public.provenances (id, document_id, structure, numero, date_enregistrement) FROM stdin;
    public          postgres    false    230       3474.dat �
          0    16950    secretariats 
   TABLE DATA           \   COPY public.secretariats (id, direction_id, owner_id, secretaire, type, status) FROM stdin;
    public          postgres    false    231       3475.dat �
          0    16957    services 
   TABLE DATA           ^   COPY public.services (id, direction_id, chef_id, owner_id, code, libelle, status) FROM stdin;
    public          postgres    false    232       3476.dat �
          0    16966    type_documents 
   TABLE DATA           [   COPY public.type_documents (id, owner_id, direction_id, code, libelle, status) FROM stdin;
    public          postgres    false    233       3477.dat �
          0    16974    users 
   TABLE DATA           h   COPY public.users (id, owner_id, email, nom, prenom, roles, niveau, zone, status, password) FROM stdin;
    public          postgres    false    234       3478.dat �
           0    0    affectations_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.affectations_id_seq', 1, false);
          public          postgres    false    215         �
           0    0    directions_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.directions_id_seq', 1, false);
          public          postgres    false    216         �
           0    0    divisions_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.divisions_id_seq', 1, false);
          public          postgres    false    217         �
           0    0    documents_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.documents_id_seq', 1, false);
          public          postgres    false    218         �
           0    0    messenger_messages_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.messenger_messages_id_seq', 1, false);
          public          postgres    false    235         �
           0    0 
   postes_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.postes_id_seq', 1, false);
          public          postgres    false    219         �
           0    0    provenances_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.provenances_id_seq', 1, false);
          public          postgres    false    220         �
           0    0    secretariats_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.secretariats_id_seq', 1, false);
          public          postgres    false    221         �
           0    0    services_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.services_id_seq', 1, false);
          public          postgres    false    222         �
           0    0    type_documents_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.type_documents_id_seq', 1, false);
          public          postgres    false    223         �
           0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 1, false);
          public          postgres    false    224         �           2606    16902    affectations affectations_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.affectations
    ADD CONSTRAINT affectations_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.affectations DROP CONSTRAINT affectations_pkey;
       public            postgres    false    225         �           2606    16911    directions directions_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.directions
    ADD CONSTRAINT directions_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.directions DROP CONSTRAINT directions_pkey;
       public            postgres    false    226         �           2606    16919    divisions divisions_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.divisions
    ADD CONSTRAINT divisions_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.divisions DROP CONSTRAINT divisions_pkey;
       public            postgres    false    227         �           2606    16883 <   doctrine_migration_versions doctrine_migration_versions_pkey 
   CONSTRAINT        ALTER TABLE ONLY public.doctrine_migration_versions
    ADD CONSTRAINT doctrine_migration_versions_pkey PRIMARY KEY (version);
 f   ALTER TABLE ONLY public.doctrine_migration_versions DROP CONSTRAINT doctrine_migration_versions_pkey;
       public            postgres    false    214         �           2606    16931    documents documents_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.documents
    ADD CONSTRAINT documents_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.documents DROP CONSTRAINT documents_pkey;
       public            postgres    false    228         �           2606    16992 *   messenger_messages messenger_messages_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.messenger_messages
    ADD CONSTRAINT messenger_messages_pkey PRIMARY KEY (id);
 T   ALTER TABLE ONLY public.messenger_messages DROP CONSTRAINT messenger_messages_pkey;
       public            postgres    false    236         �           2606    16941    postes postes_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.postes
    ADD CONSTRAINT postes_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.postes DROP CONSTRAINT postes_pkey;
       public            postgres    false    229         �           2606    16948    provenances provenances_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.provenances
    ADD CONSTRAINT provenances_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.provenances DROP CONSTRAINT provenances_pkey;
       public            postgres    false    230         �           2606    16954    secretariats secretariats_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.secretariats
    ADD CONSTRAINT secretariats_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.secretariats DROP CONSTRAINT secretariats_pkey;
       public            postgres    false    231         �           2606    16961    services services_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.services
    ADD CONSTRAINT services_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.services DROP CONSTRAINT services_pkey;
       public            postgres    false    232         �           2606    16970 "   type_documents type_documents_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.type_documents
    ADD CONSTRAINT type_documents_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.type_documents DROP CONSTRAINT type_documents_pkey;
       public            postgres    false    233         �           2606    16980    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    234         �           1259    16982    idx_1483a5e97e3c61f9    INDEX     J   CREATE INDEX idx_1483a5e97e3c61f9 ON public.users USING btree (owner_id);
 (   DROP INDEX public.idx_1483a5e97e3c61f9;
       public            postgres    false    234         �           1259    16972    idx_167633987e3c61f9    INDEX     S   CREATE INDEX idx_167633987e3c61f9 ON public.type_documents USING btree (owner_id);
 (   DROP INDEX public.idx_167633987e3c61f9;
       public            postgres    false    233         �           1259    16973    idx_16763398af73d997    INDEX     W   CREATE INDEX idx_16763398af73d997 ON public.type_documents USING btree (direction_id);
 (   DROP INDEX public.idx_16763398af73d997;
       public            postgres    false    233         �           1259    16922    idx_1c40c31150a48f1    INDEX     L   CREATE INDEX idx_1c40c31150a48f1 ON public.divisions USING btree (chef_id);
 '   DROP INDEX public.idx_1c40c31150a48f1;
       public            postgres    false    227         �           1259    16923    idx_1c40c317e3c61f9    INDEX     M   CREATE INDEX idx_1c40c317e3c61f9 ON public.divisions USING btree (owner_id);
 '   DROP INDEX public.idx_1c40c317e3c61f9;
       public            postgres    false    227         �           1259    16921    idx_1c40c31ed5ca9e6    INDEX     O   CREATE INDEX idx_1c40c31ed5ca9e6 ON public.divisions USING btree (service_id);
 '   DROP INDEX public.idx_1c40c31ed5ca9e6;
       public            postgres    false    227         �           1259    16904    idx_42091043414710b    INDEX     P   CREATE INDEX idx_42091043414710b ON public.affectations USING btree (agent_id);
 '   DROP INDEX public.idx_42091043414710b;
       public            postgres    false    225         �           1259    16905    idx_42091047e3c61f9    INDEX     P   CREATE INDEX idx_42091047e3c61f9 ON public.affectations USING btree (owner_id);
 '   DROP INDEX public.idx_42091047e3c61f9;
       public            postgres    false    225         �           1259    16906    idx_42091048e43489f    INDEX     V   CREATE INDEX idx_42091048e43489f ON public.affectations USING btree (poste_owner_id);
 '   DROP INDEX public.idx_42091048e43489f;
       public            postgres    false    225         �           1259    16903    idx_4209104c33f7837    INDEX     S   CREATE INDEX idx_4209104c33f7837 ON public.affectations USING btree (document_id);
 '   DROP INDEX public.idx_4209104c33f7837;
       public            postgres    false    225         �           1259    16914    idx_495867ec7e3c61f9    INDEX     O   CREATE INDEX idx_495867ec7e3c61f9 ON public.directions USING btree (owner_id);
 (   DROP INDEX public.idx_495867ec7e3c61f9;
       public            postgres    false    226         �           1259    16913    idx_495867ece82e7ee8    INDEX     S   CREATE INDEX idx_495867ece82e7ee8 ON public.directions USING btree (directeur_id);
 (   DROP INDEX public.idx_495867ece82e7ee8;
       public            postgres    false    226         �           1259    16942    idx_5a763c643414710b    INDEX     K   CREATE INDEX idx_5a763c643414710b ON public.postes USING btree (agent_id);
 (   DROP INDEX public.idx_5a763c643414710b;
       public            postgres    false    229         �           1259    16943    idx_5a763c647e3c61f9    INDEX     K   CREATE INDEX idx_5a763c647e3c61f9 ON public.postes USING btree (owner_id);
 (   DROP INDEX public.idx_5a763c647e3c61f9;
       public            postgres    false    229         �           1259    16964    idx_7332e169150a48f1    INDEX     L   CREATE INDEX idx_7332e169150a48f1 ON public.services USING btree (chef_id);
 (   DROP INDEX public.idx_7332e169150a48f1;
       public            postgres    false    232         �           1259    16965    idx_7332e1697e3c61f9    INDEX     M   CREATE INDEX idx_7332e1697e3c61f9 ON public.services USING btree (owner_id);
 (   DROP INDEX public.idx_7332e1697e3c61f9;
       public            postgres    false    232         �           1259    16963    idx_7332e169af73d997    INDEX     Q   CREATE INDEX idx_7332e169af73d997 ON public.services USING btree (direction_id);
 (   DROP INDEX public.idx_7332e169af73d997;
       public            postgres    false    232         �           1259    16995    idx_75ea56e016ba31db    INDEX     [   CREATE INDEX idx_75ea56e016ba31db ON public.messenger_messages USING btree (delivered_at);
 (   DROP INDEX public.idx_75ea56e016ba31db;
       public            postgres    false    236         �           1259    16994    idx_75ea56e0e3bd61ce    INDEX     [   CREATE INDEX idx_75ea56e0e3bd61ce ON public.messenger_messages USING btree (available_at);
 (   DROP INDEX public.idx_75ea56e0e3bd61ce;
       public            postgres    false    236         �           1259    16993    idx_75ea56e0fb7336f0    INDEX     Y   CREATE INDEX idx_75ea56e0fb7336f0 ON public.messenger_messages USING btree (queue_name);
 (   DROP INDEX public.idx_75ea56e0fb7336f0;
       public            postgres    false    236         �           1259    16949    idx_81307960c33f7837    INDEX     S   CREATE INDEX idx_81307960c33f7837 ON public.provenances USING btree (document_id);
 (   DROP INDEX public.idx_81307960c33f7837;
       public            postgres    false    230         �           1259    16956    idx_a0f54b6c7e3c61f9    INDEX     Q   CREATE INDEX idx_a0f54b6c7e3c61f9 ON public.secretariats USING btree (owner_id);
 (   DROP INDEX public.idx_a0f54b6c7e3c61f9;
       public            postgres    false    231         �           1259    16955    idx_a0f54b6caf73d997    INDEX     U   CREATE INDEX idx_a0f54b6caf73d997 ON public.secretariats USING btree (direction_id);
 (   DROP INDEX public.idx_a0f54b6caf73d997;
       public            postgres    false    231         �           1259    16932    idx_a2b072887e3c61f9    INDEX     N   CREATE INDEX idx_a2b072887e3c61f9 ON public.documents USING btree (owner_id);
 (   DROP INDEX public.idx_a2b072887e3c61f9;
       public            postgres    false    228         �           1259    16933    idx_a2b072888826afa6    INDEX     V   CREATE INDEX idx_a2b072888826afa6 ON public.documents USING btree (type_document_id);
 (   DROP INDEX public.idx_a2b072888826afa6;
       public            postgres    false    228         �           1259    16935    idx_a2b072888e43489f    INDEX     T   CREATE INDEX idx_a2b072888e43489f ON public.documents USING btree (poste_owner_id);
 (   DROP INDEX public.idx_a2b072888e43489f;
       public            postgres    false    228         �           1259    16934    idx_a2b07288cf18bb82    INDEX     P   CREATE INDEX idx_a2b07288cf18bb82 ON public.documents USING btree (reponse_id);
 (   DROP INDEX public.idx_a2b07288cf18bb82;
       public            postgres    false    228         �           1259    16981    uniq_1483a5e9e7927c74    INDEX     O   CREATE UNIQUE INDEX uniq_1483a5e9e7927c74 ON public.users USING btree (email);
 )   DROP INDEX public.uniq_1483a5e9e7927c74;
       public            postgres    false    234         �           1259    16971    uniq_16763398a4d60759    INDEX     Z   CREATE UNIQUE INDEX uniq_16763398a4d60759 ON public.type_documents USING btree (libelle);
 )   DROP INDEX public.uniq_16763398a4d60759;
       public            postgres    false    233         �           1259    16920    uniq_1c40c3177153098    INDEX     Q   CREATE UNIQUE INDEX uniq_1c40c3177153098 ON public.divisions USING btree (code);
 (   DROP INDEX public.uniq_1c40c3177153098;
       public            postgres    false    227         �           1259    16912    uniq_495867ec77153098    INDEX     S   CREATE UNIQUE INDEX uniq_495867ec77153098 ON public.directions USING btree (code);
 )   DROP INDEX public.uniq_495867ec77153098;
       public            postgres    false    226         �           1259    16962    uniq_7332e16977153098    INDEX     Q   CREATE UNIQUE INDEX uniq_7332e16977153098 ON public.services USING btree (code);
 )   DROP INDEX public.uniq_7332e16977153098;
       public            postgres    false    232         �           2620    16997 !   messenger_messages notify_trigger    TRIGGER     �   CREATE TRIGGER notify_trigger AFTER INSERT OR UPDATE ON public.messenger_messages FOR EACH ROW EXECUTE FUNCTION public.notify_messenger_messages();
 :   DROP TRIGGER notify_trigger ON public.messenger_messages;
       public          postgres    false    237    236         �           2606    17113    users fk_1483a5e97e3c61f9 
   FK CONSTRAINT     y   ALTER TABLE ONLY public.users
    ADD CONSTRAINT fk_1483a5e97e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);
 C   ALTER TABLE ONLY public.users DROP CONSTRAINT fk_1483a5e97e3c61f9;
       public          postgres    false    234    3285    234         �           2606    17103 "   type_documents fk_167633987e3c61f9 
   FK CONSTRAINT     �   ALTER TABLE ONLY public.type_documents
    ADD CONSTRAINT fk_167633987e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);
 L   ALTER TABLE ONLY public.type_documents DROP CONSTRAINT fk_167633987e3c61f9;
       public          postgres    false    233    234    3285         �           2606    17108 "   type_documents fk_16763398af73d997 
   FK CONSTRAINT     �   ALTER TABLE ONLY public.type_documents
    ADD CONSTRAINT fk_16763398af73d997 FOREIGN KEY (direction_id) REFERENCES public.directions(id);
 L   ALTER TABLE ONLY public.type_documents DROP CONSTRAINT fk_16763398af73d997;
       public          postgres    false    3244    226    233         �           2606    17033    divisions fk_1c40c31150a48f1 
   FK CONSTRAINT     {   ALTER TABLE ONLY public.divisions
    ADD CONSTRAINT fk_1c40c31150a48f1 FOREIGN KEY (chef_id) REFERENCES public.users(id);
 F   ALTER TABLE ONLY public.divisions DROP CONSTRAINT fk_1c40c31150a48f1;
       public          postgres    false    3285    234    227         �           2606    17038    divisions fk_1c40c317e3c61f9 
   FK CONSTRAINT     |   ALTER TABLE ONLY public.divisions
    ADD CONSTRAINT fk_1c40c317e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);
 F   ALTER TABLE ONLY public.divisions DROP CONSTRAINT fk_1c40c317e3c61f9;
       public          postgres    false    227    3285    234         �           2606    17028    divisions fk_1c40c31ed5ca9e6 
   FK CONSTRAINT     �   ALTER TABLE ONLY public.divisions
    ADD CONSTRAINT fk_1c40c31ed5ca9e6 FOREIGN KEY (service_id) REFERENCES public.services(id);
 F   ALTER TABLE ONLY public.divisions DROP CONSTRAINT fk_1c40c31ed5ca9e6;
       public          postgres    false    3275    227    232         �           2606    17003    affectations fk_42091043414710b 
   FK CONSTRAINT        ALTER TABLE ONLY public.affectations
    ADD CONSTRAINT fk_42091043414710b FOREIGN KEY (agent_id) REFERENCES public.users(id);
 I   ALTER TABLE ONLY public.affectations DROP CONSTRAINT fk_42091043414710b;
       public          postgres    false    225    3285    234         �           2606    17008    affectations fk_42091047e3c61f9 
   FK CONSTRAINT        ALTER TABLE ONLY public.affectations
    ADD CONSTRAINT fk_42091047e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);
 I   ALTER TABLE ONLY public.affectations DROP CONSTRAINT fk_42091047e3c61f9;
       public          postgres    false    225    234    3285         �           2606    17013    affectations fk_42091048e43489f 
   FK CONSTRAINT     �   ALTER TABLE ONLY public.affectations
    ADD CONSTRAINT fk_42091048e43489f FOREIGN KEY (poste_owner_id) REFERENCES public.postes(id);
 I   ALTER TABLE ONLY public.affectations DROP CONSTRAINT fk_42091048e43489f;
       public          postgres    false    3263    225    229         �           2606    16998    affectations fk_4209104c33f7837 
   FK CONSTRAINT     �   ALTER TABLE ONLY public.affectations
    ADD CONSTRAINT fk_4209104c33f7837 FOREIGN KEY (document_id) REFERENCES public.documents(id);
 I   ALTER TABLE ONLY public.affectations DROP CONSTRAINT fk_4209104c33f7837;
       public          postgres    false    228    225    3255         �           2606    17023    directions fk_495867ec7e3c61f9 
   FK CONSTRAINT     ~   ALTER TABLE ONLY public.directions
    ADD CONSTRAINT fk_495867ec7e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);
 H   ALTER TABLE ONLY public.directions DROP CONSTRAINT fk_495867ec7e3c61f9;
       public          postgres    false    3285    234    226         �           2606    17018    directions fk_495867ece82e7ee8 
   FK CONSTRAINT     �   ALTER TABLE ONLY public.directions
    ADD CONSTRAINT fk_495867ece82e7ee8 FOREIGN KEY (directeur_id) REFERENCES public.users(id);
 H   ALTER TABLE ONLY public.directions DROP CONSTRAINT fk_495867ece82e7ee8;
       public          postgres    false    234    226    3285         �           2606    17063    postes fk_5a763c643414710b 
   FK CONSTRAINT     z   ALTER TABLE ONLY public.postes
    ADD CONSTRAINT fk_5a763c643414710b FOREIGN KEY (agent_id) REFERENCES public.users(id);
 D   ALTER TABLE ONLY public.postes DROP CONSTRAINT fk_5a763c643414710b;
       public          postgres    false    229    3285    234         �           2606    17068    postes fk_5a763c647e3c61f9 
   FK CONSTRAINT     z   ALTER TABLE ONLY public.postes
    ADD CONSTRAINT fk_5a763c647e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);
 D   ALTER TABLE ONLY public.postes DROP CONSTRAINT fk_5a763c647e3c61f9;
       public          postgres    false    234    3285    229         �           2606    17093    services fk_7332e169150a48f1 
   FK CONSTRAINT     {   ALTER TABLE ONLY public.services
    ADD CONSTRAINT fk_7332e169150a48f1 FOREIGN KEY (chef_id) REFERENCES public.users(id);
 F   ALTER TABLE ONLY public.services DROP CONSTRAINT fk_7332e169150a48f1;
       public          postgres    false    3285    234    232         �           2606    17098    services fk_7332e1697e3c61f9 
   FK CONSTRAINT     |   ALTER TABLE ONLY public.services
    ADD CONSTRAINT fk_7332e1697e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);
 F   ALTER TABLE ONLY public.services DROP CONSTRAINT fk_7332e1697e3c61f9;
       public          postgres    false    234    3285    232         �           2606    17088    services fk_7332e169af73d997 
   FK CONSTRAINT     �   ALTER TABLE ONLY public.services
    ADD CONSTRAINT fk_7332e169af73d997 FOREIGN KEY (direction_id) REFERENCES public.directions(id);
 F   ALTER TABLE ONLY public.services DROP CONSTRAINT fk_7332e169af73d997;
       public          postgres    false    3244    226    232         �           2606    17073    provenances fk_81307960c33f7837 
   FK CONSTRAINT     �   ALTER TABLE ONLY public.provenances
    ADD CONSTRAINT fk_81307960c33f7837 FOREIGN KEY (document_id) REFERENCES public.documents(id);
 I   ALTER TABLE ONLY public.provenances DROP CONSTRAINT fk_81307960c33f7837;
       public          postgres    false    3255    228    230         �           2606    17083     secretariats fk_a0f54b6c7e3c61f9 
   FK CONSTRAINT     �   ALTER TABLE ONLY public.secretariats
    ADD CONSTRAINT fk_a0f54b6c7e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);
 J   ALTER TABLE ONLY public.secretariats DROP CONSTRAINT fk_a0f54b6c7e3c61f9;
       public          postgres    false    234    3285    231         �           2606    17078     secretariats fk_a0f54b6caf73d997 
   FK CONSTRAINT     �   ALTER TABLE ONLY public.secretariats
    ADD CONSTRAINT fk_a0f54b6caf73d997 FOREIGN KEY (direction_id) REFERENCES public.directions(id);
 J   ALTER TABLE ONLY public.secretariats DROP CONSTRAINT fk_a0f54b6caf73d997;
       public          postgres    false    226    3244    231         �           2606    17043    documents fk_a2b072887e3c61f9 
   FK CONSTRAINT     }   ALTER TABLE ONLY public.documents
    ADD CONSTRAINT fk_a2b072887e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);
 G   ALTER TABLE ONLY public.documents DROP CONSTRAINT fk_a2b072887e3c61f9;
       public          postgres    false    228    3285    234         �           2606    17048    documents fk_a2b072888826afa6 
   FK CONSTRAINT     �   ALTER TABLE ONLY public.documents
    ADD CONSTRAINT fk_a2b072888826afa6 FOREIGN KEY (type_document_id) REFERENCES public.type_documents(id);
 G   ALTER TABLE ONLY public.documents DROP CONSTRAINT fk_a2b072888826afa6;
       public          postgres    false    228    3280    233         �           2606    17058    documents fk_a2b072888e43489f 
   FK CONSTRAINT     �   ALTER TABLE ONLY public.documents
    ADD CONSTRAINT fk_a2b072888e43489f FOREIGN KEY (poste_owner_id) REFERENCES public.postes(id);
 G   ALTER TABLE ONLY public.documents DROP CONSTRAINT fk_a2b072888e43489f;
       public          postgres    false    228    3263    229         �           2606    17053    documents fk_a2b07288cf18bb82 
   FK CONSTRAINT     �   ALTER TABLE ONLY public.documents
    ADD CONSTRAINT fk_a2b07288cf18bb82 FOREIGN KEY (reponse_id) REFERENCES public.documents(id);
 G   ALTER TABLE ONLY public.documents DROP CONSTRAINT fk_a2b07288cf18bb82;
       public          postgres    false    228    3255    228                                                                                                              3469.dat                                                                                            0000600 0004000 0002000 00000000005 15010120224 0014235 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        \.


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           3470.dat                                                                                            0000600 0004000 0002000 00000000005 15010120224 0014225 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        \.


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           3471.dat                                                                                            0000600 0004000 0002000 00000000005 15010120224 0014226 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        \.


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           3458.dat                                                                                            0000600 0004000 0002000 00000000107 15010120224 0014236 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        DoctrineMigrations\\Version20240630121028	2024-06-30 14:11:18	336
\.


                                                                                                                                                                                                                                                                                                                                                                                                                                                         3472.dat                                                                                            0000600 0004000 0002000 00000000005 15010120224 0014227 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        \.


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           3480.dat                                                                                            0000600 0004000 0002000 00000000005 15010120224 0014226 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        \.


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           3473.dat                                                                                            0000600 0004000 0002000 00000000005 15010120224 0014230 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        \.


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           3474.dat                                                                                            0000600 0004000 0002000 00000000005 15010120224 0014231 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        \.


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           3475.dat                                                                                            0000600 0004000 0002000 00000000005 15010120224 0014232 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        \.


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           3476.dat                                                                                            0000600 0004000 0002000 00000000005 15010120224 0014233 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        \.


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           3477.dat                                                                                            0000600 0004000 0002000 00000000005 15010120224 0014234 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        \.


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           3478.dat                                                                                            0000600 0004000 0002000 00000000005 15010120224 0014235 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        \.


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           restore.sql                                                                                         0000600 0004000 0002000 00000073136 15010120224 0015361 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        --
-- NOTE:
--
-- File paths need to be edited. Search for $$PATH$$ and
-- replace it with the path to the directory containing
-- the extracted data files.
--
--
-- PostgreSQL database dump
--

-- Dumped from database version 15.4
-- Dumped by pg_dump version 15.4

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;








\connect ArchivageDGML

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: notify_messenger_messages(); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION public.notify_messenger_messages() RETURNS trigger
    LANGUAGE plpgsql
    AS $$
            BEGIN
                PERFORM pg_notify('messenger_messages', NEW.queue_name::text);
                RETURN NEW;
            END;
        $$;


ALTER FUNCTION public.notify_messenger_messages() OWNER TO postgres;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: affectations; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.affectations (
    id integer NOT NULL,
    document_id integer NOT NULL,
    agent_id integer,
    owner_id integer,
    poste_owner_id integer,
    envoyeur character varying(255) DEFAULT NULL::character varying,
    receveur character varying(255) DEFAULT NULL::character varying,
    date_affectation_at date,
    status boolean
);


ALTER TABLE public.affectations OWNER TO postgres;

--
-- Name: affectations_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.affectations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.affectations_id_seq OWNER TO postgres;

--
-- Name: directions; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.directions (
    id integer NOT NULL,
    directeur_id integer,
    owner_id integer,
    code character varying(10) NOT NULL,
    libelle character varying(255) NOT NULL,
    status boolean NOT NULL
);


ALTER TABLE public.directions OWNER TO postgres;

--
-- Name: directions_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.directions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.directions_id_seq OWNER TO postgres;

--
-- Name: divisions; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.divisions (
    id integer NOT NULL,
    service_id integer,
    chef_id integer,
    owner_id integer,
    code character varying(10) NOT NULL,
    libelle character varying(255) NOT NULL,
    status boolean NOT NULL
);


ALTER TABLE public.divisions OWNER TO postgres;

--
-- Name: divisions_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.divisions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.divisions_id_seq OWNER TO postgres;

--
-- Name: doctrine_migration_versions; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.doctrine_migration_versions (
    version character varying(191) NOT NULL,
    executed_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    execution_time integer
);


ALTER TABLE public.doctrine_migration_versions OWNER TO postgres;

--
-- Name: documents; Type: TABLE; Schema: public; Owner: postgres
--






--
-- Name: COLUMN documents.document_at; Type: COMMENT; Schema: public; Owner: postgres
--




--
-- Name: documents_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--






--
-- Name: messenger_messages; Type: TABLE; Schema: public; Owner: postgres
--






--
-- Name: COLUMN messenger_messages.created_at; Type: COMMENT; Schema: public; Owner: postgres
--




--
-- Name: COLUMN messenger_messages.available_at; Type: COMMENT; Schema: public; Owner: postgres
--




--
-- Name: COLUMN messenger_messages.delivered_at; Type: COMMENT; Schema: public; Owner: postgres
--




--
-- Name: messenger_messages_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--






--
-- Name: messenger_messages_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--




--
-- Name: postes; Type: TABLE; Schema: public; Owner: postgres
--






--
-- Name: postes_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--






--
-- Name: provenances; Type: TABLE; Schema: public; Owner: postgres
--






--
-- Name: provenances_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--






--
-- Name: secretariats; Type: TABLE; Schema: public; Owner: postgres
--






--
-- Name: secretariats_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--






--
-- Name: services; Type: TABLE; Schema: public; Owner: postgres
--






--
-- Name: services_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.services_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.services_id_seq OWNER TO postgres;

--
-- Name: type_documents; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.type_documents (
    id integer NOT NULL,
    owner_id integer,
    direction_id integer,
    code character varying(25) NOT NULL,
    libelle character varying(255) NOT NULL,
    status boolean
);


ALTER TABLE public.type_documents OWNER TO postgres;

--
-- Name: type_documents_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.type_documents_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.type_documents_id_seq OWNER TO postgres;

--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id integer NOT NULL,
    owner_id integer,
    email character varying(180) NOT NULL,
    nom character varying(80) NOT NULL,
    prenom character varying(100) NOT NULL,
    roles json NOT NULL,
    niveau character varying(15) NOT NULL,
    zone character varying(15) NOT NULL,
    status boolean NOT NULL,
    password character varying(255) NOT NULL
);


ALTER TABLE public.users OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- Name: messenger_messages id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.messenger_messages ALTER COLUMN id SET DEFAULT nextval('public.messenger_messages_id_seq'::regclass);


--
-- Data for Name: affectations; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.affectations (id, document_id, agent_id, owner_id, poste_owner_id, envoyeur, receveur, date_affectation_at, status) FROM stdin;
\.
COPY public.affectations (id, document_id, agent_id, owner_id, poste_owner_id, envoyeur, receveur, date_affectation_at, status) FROM '$$PATH$$/3469.dat';

--
-- Data for Name: directions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.directions (id, directeur_id, owner_id, code, libelle, status) FROM stdin;
\.
COPY public.directions (id, directeur_id, owner_id, code, libelle, status) FROM '$$PATH$$/3470.dat';

--
-- Data for Name: divisions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.divisions (id, service_id, chef_id, owner_id, code, libelle, status) FROM stdin;
\.
COPY public.divisions (id, service_id, chef_id, owner_id, code, libelle, status) FROM '$$PATH$$/3471.dat';

--
-- Data for Name: doctrine_migration_versions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.doctrine_migration_versions (version, executed_at, execution_time) FROM stdin;
\.
COPY public.doctrine_migration_versions (version, executed_at, execution_time) FROM '$$PATH$$/3458.dat';

--
-- Data for Name: documents; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.documents (id, owner_id, type_document_id, reponse_id, poste_owner_id, objet, chemin, mouvement, document_at, status, structure, reference, numero_enregistrement, poste, niveau, date_arrivee, date_document, initiateur, observation) FROM stdin;
\.
COPY public.documents (id, owner_id, type_document_id, reponse_id, poste_owner_id, objet, chemin, mouvement, document_at, status, structure, reference, numero_enregistrement, poste, niveau, date_arrivee, date_document, initiateur, observation) FROM '$$PATH$$/3472.dat';

--
-- Data for Name: messenger_messages; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.messenger_messages (id, body, headers, queue_name, created_at, available_at, delivered_at) FROM stdin;
\.
COPY public.messenger_messages (id, body, headers, queue_name, created_at, available_at, delivered_at) FROM '$$PATH$$/3480.dat';

--
-- Data for Name: postes; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.postes (id, agent_id, owner_id, niveau, fonction, date_deb, poste_at, date_fin, status, type) FROM stdin;
\.
COPY public.postes (id, agent_id, owner_id, niveau, fonction, date_deb, poste_at, date_fin, status, type) FROM '$$PATH$$/3473.dat';

--
-- Data for Name: provenances; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.provenances (id, document_id, structure, numero, date_enregistrement) FROM stdin;
\.
COPY public.provenances (id, document_id, structure, numero, date_enregistrement) FROM '$$PATH$$/3474.dat';

--
-- Data for Name: secretariats; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.secretariats (id, direction_id, owner_id, secretaire, type, status) FROM stdin;
\.
COPY public.secretariats (id, direction_id, owner_id, secretaire, type, status) FROM '$$PATH$$/3475.dat';

--
-- Data for Name: services; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.services (id, direction_id, chef_id, owner_id, code, libelle, status) FROM stdin;
\.
COPY public.services (id, direction_id, chef_id, owner_id, code, libelle, status) FROM '$$PATH$$/3476.dat';

--
-- Data for Name: type_documents; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.type_documents (id, owner_id, direction_id, code, libelle, status) FROM stdin;
\.
COPY public.type_documents (id, owner_id, direction_id, code, libelle, status) FROM '$$PATH$$/3477.dat';

--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (id, owner_id, email, nom, prenom, roles, niveau, zone, status, password) FROM stdin;
\.
COPY public.users (id, owner_id, email, nom, prenom, roles, niveau, zone, status, password) FROM '$$PATH$$/3478.dat';

--
-- Name: affectations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.affectations_id_seq', 1, false);


--
-- Name: directions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.directions_id_seq', 1, false);


--
-- Name: divisions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.divisions_id_seq', 1, false);


--
-- Name: documents_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.documents_id_seq', 1, false);


--
-- Name: messenger_messages_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.messenger_messages_id_seq', 1, false);


--
-- Name: postes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.postes_id_seq', 1, false);


--
-- Name: provenances_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.provenances_id_seq', 1, false);


--
-- Name: secretariats_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.secretariats_id_seq', 1, false);


--
-- Name: services_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.services_id_seq', 1, false);


--
-- Name: type_documents_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.type_documents_id_seq', 1, false);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 1, false);


--
-- Name: affectations affectations_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.affectations
    ADD CONSTRAINT affectations_pkey PRIMARY KEY (id);


--
-- Name: directions directions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.directions
    ADD CONSTRAINT directions_pkey PRIMARY KEY (id);


--
-- Name: divisions divisions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.divisions
    ADD CONSTRAINT divisions_pkey PRIMARY KEY (id);


--
-- Name: doctrine_migration_versions doctrine_migration_versions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.doctrine_migration_versions
    ADD CONSTRAINT doctrine_migration_versions_pkey PRIMARY KEY (version);


--
-- Name: documents documents_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.documents
    ADD CONSTRAINT documents_pkey PRIMARY KEY (id);


--
-- Name: messenger_messages messenger_messages_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.messenger_messages
    ADD CONSTRAINT messenger_messages_pkey PRIMARY KEY (id);


--
-- Name: postes postes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.postes
    ADD CONSTRAINT postes_pkey PRIMARY KEY (id);


--
-- Name: provenances provenances_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.provenances
    ADD CONSTRAINT provenances_pkey PRIMARY KEY (id);


--
-- Name: secretariats secretariats_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.secretariats
    ADD CONSTRAINT secretariats_pkey PRIMARY KEY (id);


--
-- Name: services services_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.services
    ADD CONSTRAINT services_pkey PRIMARY KEY (id);


--
-- Name: type_documents type_documents_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.type_documents
    ADD CONSTRAINT type_documents_pkey PRIMARY KEY (id);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: idx_1483a5e97e3c61f9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_1483a5e97e3c61f9 ON public.users USING btree (owner_id);


--
-- Name: idx_167633987e3c61f9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_167633987e3c61f9 ON public.type_documents USING btree (owner_id);


--
-- Name: idx_16763398af73d997; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_16763398af73d997 ON public.type_documents USING btree (direction_id);


--
-- Name: idx_1c40c31150a48f1; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_1c40c31150a48f1 ON public.divisions USING btree (chef_id);


--
-- Name: idx_1c40c317e3c61f9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_1c40c317e3c61f9 ON public.divisions USING btree (owner_id);


--
-- Name: idx_1c40c31ed5ca9e6; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_1c40c31ed5ca9e6 ON public.divisions USING btree (service_id);


--
-- Name: idx_42091043414710b; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_42091043414710b ON public.affectations USING btree (agent_id);


--
-- Name: idx_42091047e3c61f9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_42091047e3c61f9 ON public.affectations USING btree (owner_id);


--
-- Name: idx_42091048e43489f; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_42091048e43489f ON public.affectations USING btree (poste_owner_id);


--
-- Name: idx_4209104c33f7837; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_4209104c33f7837 ON public.affectations USING btree (document_id);


--
-- Name: idx_495867ec7e3c61f9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_495867ec7e3c61f9 ON public.directions USING btree (owner_id);


--
-- Name: idx_495867ece82e7ee8; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_495867ece82e7ee8 ON public.directions USING btree (directeur_id);


--
-- Name: idx_5a763c643414710b; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_5a763c643414710b ON public.postes USING btree (agent_id);


--
-- Name: idx_5a763c647e3c61f9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_5a763c647e3c61f9 ON public.postes USING btree (owner_id);


--
-- Name: idx_7332e169150a48f1; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_7332e169150a48f1 ON public.services USING btree (chef_id);


--
-- Name: idx_7332e1697e3c61f9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_7332e1697e3c61f9 ON public.services USING btree (owner_id);


--
-- Name: idx_7332e169af73d997; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_7332e169af73d997 ON public.services USING btree (direction_id);


--
-- Name: idx_75ea56e016ba31db; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_75ea56e016ba31db ON public.messenger_messages USING btree (delivered_at);


--
-- Name: idx_75ea56e0e3bd61ce; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_75ea56e0e3bd61ce ON public.messenger_messages USING btree (available_at);


--
-- Name: idx_75ea56e0fb7336f0; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_75ea56e0fb7336f0 ON public.messenger_messages USING btree (queue_name);


--
-- Name: idx_81307960c33f7837; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_81307960c33f7837 ON public.provenances USING btree (document_id);


--
-- Name: idx_a0f54b6c7e3c61f9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_a0f54b6c7e3c61f9 ON public.secretariats USING btree (owner_id);


--
-- Name: idx_a0f54b6caf73d997; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_a0f54b6caf73d997 ON public.secretariats USING btree (direction_id);


--
-- Name: idx_a2b072887e3c61f9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_a2b072887e3c61f9 ON public.documents USING btree (owner_id);


--
-- Name: idx_a2b072888826afa6; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_a2b072888826afa6 ON public.documents USING btree (type_document_id);


--
-- Name: idx_a2b072888e43489f; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_a2b072888e43489f ON public.documents USING btree (poste_owner_id);


--
-- Name: idx_a2b07288cf18bb82; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_a2b07288cf18bb82 ON public.documents USING btree (reponse_id);


--
-- Name: uniq_1483a5e9e7927c74; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX uniq_1483a5e9e7927c74 ON public.users USING btree (email);


--
-- Name: uniq_16763398a4d60759; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX uniq_16763398a4d60759 ON public.type_documents USING btree (libelle);


--
-- Name: uniq_1c40c3177153098; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX uniq_1c40c3177153098 ON public.divisions USING btree (code);


--
-- Name: uniq_495867ec77153098; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX uniq_495867ec77153098 ON public.directions USING btree (code);


--
-- Name: uniq_7332e16977153098; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX uniq_7332e16977153098 ON public.services USING btree (code);


--
-- Name: messenger_messages notify_trigger; Type: TRIGGER; Schema: public; Owner: postgres
--

CREATE TRIGGER notify_trigger AFTER INSERT OR UPDATE ON public.messenger_messages FOR EACH ROW EXECUTE FUNCTION public.notify_messenger_messages();


--
-- Name: users fk_1483a5e97e3c61f9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT fk_1483a5e97e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);


--
-- Name: type_documents fk_167633987e3c61f9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.type_documents
    ADD CONSTRAINT fk_167633987e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);


--
-- Name: type_documents fk_16763398af73d997; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.type_documents
    ADD CONSTRAINT fk_16763398af73d997 FOREIGN KEY (direction_id) REFERENCES public.directions(id);


--
-- Name: divisions fk_1c40c31150a48f1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.divisions
    ADD CONSTRAINT fk_1c40c31150a48f1 FOREIGN KEY (chef_id) REFERENCES public.users(id);


--
-- Name: divisions fk_1c40c317e3c61f9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.divisions
    ADD CONSTRAINT fk_1c40c317e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);


--
-- Name: divisions fk_1c40c31ed5ca9e6; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.divisions
    ADD CONSTRAINT fk_1c40c31ed5ca9e6 FOREIGN KEY (service_id) REFERENCES public.services(id);


--
-- Name: affectations fk_42091043414710b; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.affectations
    ADD CONSTRAINT fk_42091043414710b FOREIGN KEY (agent_id) REFERENCES public.users(id);


--
-- Name: affectations fk_42091047e3c61f9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.affectations
    ADD CONSTRAINT fk_42091047e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);


--
-- Name: affectations fk_42091048e43489f; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.affectations
    ADD CONSTRAINT fk_42091048e43489f FOREIGN KEY (poste_owner_id) REFERENCES public.postes(id);


--
-- Name: affectations fk_4209104c33f7837; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.affectations
    ADD CONSTRAINT fk_4209104c33f7837 FOREIGN KEY (document_id) REFERENCES public.documents(id);


--
-- Name: directions fk_495867ec7e3c61f9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.directions
    ADD CONSTRAINT fk_495867ec7e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);


--
-- Name: directions fk_495867ece82e7ee8; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.directions
    ADD CONSTRAINT fk_495867ece82e7ee8 FOREIGN KEY (directeur_id) REFERENCES public.users(id);


--
-- Name: postes fk_5a763c643414710b; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.postes
    ADD CONSTRAINT fk_5a763c643414710b FOREIGN KEY (agent_id) REFERENCES public.users(id);


--
-- Name: postes fk_5a763c647e3c61f9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.postes
    ADD CONSTRAINT fk_5a763c647e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);


--
-- Name: services fk_7332e169150a48f1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.services
    ADD CONSTRAINT fk_7332e169150a48f1 FOREIGN KEY (chef_id) REFERENCES public.users(id);


--
-- Name: services fk_7332e1697e3c61f9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.services
    ADD CONSTRAINT fk_7332e1697e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);


--
-- Name: services fk_7332e169af73d997; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.services
    ADD CONSTRAINT fk_7332e169af73d997 FOREIGN KEY (direction_id) REFERENCES public.directions(id);


--
-- Name: provenances fk_81307960c33f7837; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.provenances
    ADD CONSTRAINT fk_81307960c33f7837 FOREIGN KEY (document_id) REFERENCES public.documents(id);


--
-- Name: secretariats fk_a0f54b6c7e3c61f9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.secretariats
    ADD CONSTRAINT fk_a0f54b6c7e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);


--
-- Name: secretariats fk_a0f54b6caf73d997; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.secretariats
    ADD CONSTRAINT fk_a0f54b6caf73d997 FOREIGN KEY (direction_id) REFERENCES public.directions(id);


--
-- Name: documents fk_a2b072887e3c61f9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.documents
    ADD CONSTRAINT fk_a2b072887e3c61f9 FOREIGN KEY (owner_id) REFERENCES public.users(id);


--
-- Name: documents fk_a2b072888826afa6; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.documents
    ADD CONSTRAINT fk_a2b072888826afa6 FOREIGN KEY (type_document_id) REFERENCES public.type_documents(id);


--
-- Name: documents fk_a2b072888e43489f; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.documents
    ADD CONSTRAINT fk_a2b072888e43489f FOREIGN KEY (poste_owner_id) REFERENCES public.postes(id);


--
-- Name: documents fk_a2b07288cf18bb82; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.documents
    ADD CONSTRAINT fk_a2b07288cf18bb82 FOREIGN KEY (reponse_id) REFERENCES public.documents(id);


--
-- PostgreSQL database dump complete
--

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  