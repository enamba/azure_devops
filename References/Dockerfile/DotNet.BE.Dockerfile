FROM $(ACR-LoginServerName)/$(ImageName):$(ImageVersion)
USER root
RUN apt-get update
WORKDIR /app
COPY /publish/ ./
USER user
ENTRYPOINT ["dotnet", "$(Container.Service.Entrypoint)"]
