export class Table {
  constructor(data = {}) {
    this.id = data.id ?? null;
    this.nombre_completo = data.nombre_completo ?? '';
    this.email = data.email ?? '';
    this.password = data.password ?? '';
    this.bloqued = data.bloqued ?? '';
  }
}
