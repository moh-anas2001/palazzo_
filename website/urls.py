from django.urls import path, include
from . import views

urlpatterns = [
    path('', views.index,name="index"),
    path('about/', views.about,name="about"),
    path('services', views.services,name="services"),
    path('projects', views.projects,name="projects"),
    path('civilprojects', views.civilprojects,name="civilprojects"),
    path('interiorprojects', views.interiorprojects,name="interiorprojects"),
    path('contact', views.contact,name="contact"),
]