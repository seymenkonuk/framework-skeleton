# Framework Skeleton
> seymenkonuk/framework ile MVC tabanlı yeni PHP projeleri oluşturmak için hazırlanmış proje şablonu.

## Açıklama
seymenkonuk/framework ile MVC yapısında uygulamalar geliştirmek için hazırlanmış basit bir başlangıç projesidir.

Docker desteği sayesinde PHP ortamı, web server ve gerekli servisler ekstra kurulum gerektirmeden çalıştırılabilir. Amaç, yeni bir MVC projesine hızlı ve temiz bir başlangıç yapmaktır.

## Özellikler

- Docker destekli geliştirme ortamı
- seymenkonuk/framework entegrasyonu
- Hazır MVC proje klasör yapısı
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
