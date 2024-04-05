-- 1.
create database sekolah;

use sekolah;

create table siswa (
    no_induk int,
    nama_siswa varchar(255),
    kd_kls varchar(5),
    jurusan varchar(100)
);

insert into siswa values
(10125, "Anton", "XI", "TKJ"),
(10126, "Budi", "XII", "AKL"),
(10127, "Banu", "XI", "TKJ"),
(10128, "Andika", "X", "UPW"),
(10129, "Risky", "X", "UPW"),
(10130, "Mania", "XI", "TKJ"),
(10131, "Luke", "XII", "AKL");
--

-- 2.
alter table siswa add nilai varchar(100);
--

-- 3.
update siswa set nilai = 80 where no_induk = 10125;
update siswa set nilai = 90 where no_induk = 10126;
update siswa set nilai = 30 where no_induk = 10127;
update siswa set nilai = 40 where no_induk = 10128;
update siswa set nilai = 85 where no_induk = 10129;
update siswa set nilai = 70 where no_induk = 10130;
update siswa set nilai = 150 where no_induk = 10131;
--

-- 4.
select * from siswa order by nilai asc;
--
