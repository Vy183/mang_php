/*bai 1.1*/
SELECT ten_nha_xuat_ban, dia_chi, dien_thoai
FROM bs_nha_xuat_ban;

/*bai 1.2*/
select ho_ten, dia_chi, dien_thoai
from bs_nguoi_dung;

/*bai 1.8*/
select *
from bs_sach
where ten_sach Like '%Tái bản%';

/*bai 1.10*/
select ten_sach, sku, gioi_thieu, kich_thuoc, trong_luong, gia_bia
from bs_sach s
join bs_nha_xuat_ban nxb
on s.id_nha_xuat_ban = nxb.id
join bs_loai_sach ls
on s.id_loai_sach = ls.id
where nxb.id = '11' and ls.id = '17'
order by ten_sach ASC;

/*bai 1.13*/
select *
from bs_sach
where (id_loai_sach ='56' or id_loai_sach ='90' or id_loai_sach ='92')
and trong_luong >= 300;

/*bai 1.14*/
select *
from bs_sach
where id_loai_sach = '45'
or don_gia <= 60000;

/*bai 1.17*/
select ten_sach, trong_luong, don_gia, gia_bia
from bs_sach
order by don_gia DESC
limit 10;

SELECT don_gia, min(don_gia)
from bs_sach s