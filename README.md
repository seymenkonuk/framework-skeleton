# Framework Skeleton
> seymenkonuk/framework ile yeni PHP projeleri oluşturmak için hazırlanmış proje şablonu.

## Açıklama
seymenkonuk/framework ile geliştirme yapmak için hazırlanmış basit bir başlangıç projesidir.

Docker desteği sayesinde PHP ortamı, web server ve gerekli servisler ekstra kurulum gerektirmeden çalıştırılabilir. Amaç, yeni bir projeye hızlı ve temiz bir başlangıç yapmaktır.

## Özellikler

- Docker destekli geliştirme ortamı
- seymenkonuk/framework entegrasyonu
- Hazır proje klasör yapısı
- Örnek controller ve route yapısı
- Basit ve genişletilebilir mimari

## Kurulum
```bash
composer create-project seymenkonuk/framework-skeleton ProjectName
```

## Çalıştırma
```bash
docker compose up -d
```

## Erişim
```bash
http://localhost:8080
```

## Lisans
Bu proje [MIT Lisansı](https://github.com/seymenkonuk/framework-skeleton/blob/main/LICENSE) ile lisanslanmıştır.
