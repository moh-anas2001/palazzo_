from django.contrib import admin

# Register your models here.
from .models import Contact, Project_data

admin.site.register(Contact)
admin.site.register(Project_data)


