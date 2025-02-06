@extends("components.app")
@section("dashboard")

<main>
    @csrf
    <div class="overflow-x-auto">
        <table class="table">
          <!-- head -->
          <thead>
            <tr>
              <th>LRN</th>
              <th>Name</th>
              <th>Strand</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            <tr>
              <th>524531922517 </th>
              <td>Cy Ganderton</td>
              <td>ABM</td>
              <td><div class="badge badge-error">Incomplete</div></td>
            </tr>
            <!-- row 2 -->
            <tr>
              <th>687530640030 </th>
              <td>Hart Hagerty</td>
              <td>TVL-ICT</td>
              <td><div class="badge badge-success">complete</div></td>
            </tr>
            <!-- row 3 -->
            <tr>
              <th>291790878435 </th>
              <td>Brice Swyre</td>
              <td>STEM</td>
              <td><div class="badge badge-success">complete</div></td>
            </tr>
          </tbody>
        </table>
      </div>
</main>

@endsection
